<?php
class Product_model extends CI_Model {
	private $path = 'public/uploads/product_image/';
	//private $path = base_url('public/uploads/product_image/');
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('admin/role_model');
		$this->load->model('admin/group_model');
	}
	
	public function getTotalRecord() {	
		$this->db->select('count(*) as total');		
		$this->db->where('status', 1);
		$query = $this->db->get("tbl_product");
		//echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $data = $query->result();
			return $data[0]->total;
        }        
		return 0;
    }
	
	public function getRecords($start=0, $limit=10) {
		$this->db->where('status !=', 5);
		$this->db->order_by('id DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get("tbl_product");
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				//$role = $row->roleID;
				//$row->role = $this->role_model->GetRecordById($role)->role_name;
				$data[] = $row;
			}
			return $data;
		}
		return false;
  }
	
	// public function getRecordById($id) {
 //                $this->db->where('adminId', $id);
	// 			$query = $this->db->get("tbl_admin");
	// 			echo "<pre>";print_r($query->result());die;
 //        if ($query->num_rows() > 0) {
 //             foreach ($query->result() as $row) {
 //                $data = $row;
 //            }
 //            return $data;
 //        }
 //        return false;
 //    }

	public function getRecordById($id) {
                $this->db->where('id', $id);
				$query = $this->db->get("tbl_product");
				//echo "<pre>";print_r($query->result());die;
        if ($query->num_rows() > 0) {
             foreach ($query->result() as $row) {
                $data = $row;
            }
            return $data;
        }
        return false;
    }

	public function save_product_data($image=null) {
		$id = $this->input->post('id');
		$product_name = $this->input->post('product_name');
		$product_image = $this->input->post('product_image');
		$product_brand = $this->input->post('product_brand');
		$product_category = $this->input->post('product_category');
		$product_model = $this->input->post('product_model');
		$status = $this->input->post('status');
		$created_by = $this->session->userdata('adminid');
		//echo "<pre>";print_r($_FILES);die;	

		if(isset($_FILES['product_image'])){
		  //echo "<pre>";print_r($_FILES);	               
                $path = $_FILES['product_image']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $rand = 'img_' . time() . rand(1, 988);
                // $config2['upload_path'] = BASEPATH . "../assets/images/product_img/";
                $config['upload_path'] = base_url("assets/images/product_img/");
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name'] = $rand;
                //$this->upload->initialize($config2);
                //$this->load->library('upload', $config2);
               //echo "<pre>";print_r($config);
                //$this->load->library('upload'); 
                $this->load->library('upload', $config);
                $this->upload->initialize($config);               
                if($this->upload->do_upload('product_image'))
                {
                $data = array('upload_data' => $this->upload->data());
                $_POST['product_image'] = "assets/images/product_img/" . $rand . '.' . $ext;
                }
                else
                {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                }
            }
      //echo "<pre>";print_r($_POST['product_image']);die;
		if(!empty($_POST['product_image'])){
			$product_url = $_POST['product_image'];
		}else{
			$product_url = 'na';
		}
		$data = array(
					'product_name'=>$product_name ,
					'product_image'=>$product_url,
					'product_model'=>$product_model,	
					'product_category'=>$product_category,
					'product_brand'=>$product_brand,
					'created_by' =>$created_by					
				);
				//echo "<pre>";print_r($data);die;				
		if($id)			
		{
			$this->db->where('id', $id);
			$this->db->update('tbl_product', $data); 
		}
		else
		{
			// $data['admin_created_by'] = $created_by;
			// $data['admin_date']=date('Y-m-d H:i:s');
			$this->db->insert('tbl_product',$data); 
		}
		return true;
	}
	
	public function validate(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_email', 'user_email', 'trim|required');
		//$this->form_validation->set_rules('user_email', 'user_email', 'trim|required');		
		if($this->form_validation->run() == FALSE)
		{
			return false;
		}
		else
		{		 
				$username = $this->security->xss_clean($this->input->post('user_email'));
				$password = $this->security->xss_clean($this->input->post('user_pass'));
				//echo "<pre>";print_r($_POST);die;
				$this->db->where('admin_email', $username);
				$this->db->where('admin_password', md5($password));
				$this->db->where('admin_status', 1);
				$query = $this->db->get('tbl_admin');
				//echo $this->db->last_query();die;
				if($query->num_rows() == 1)
				{
						$row = $query->row();
						//echo "<pre>";print_r($row);die;
						// $data = array(
						// 				'adminid' => $row->adminID,
						// 				'aname' => $row->admin_name,
						// 				'aemail' => $row->admin_email,
						// 				'validated' => true,
						// 				'arole' => $row->role
						// 				);
						$data = array(
										'adminid' => $row->adminID,
										'aname' => $row->admin_name,
										'aemail' => $row->admin_email,
										'validated' => true,
										'arole' => $row->roleID
										);
						$this->session->set_userdata($data);
						return true;
				}
				return false;
		}
	}

	function upload($fieldname)
	{
		$config['upload_path'] = $this->path;
		if (!is_dir($this->path))
		{
			mkdir($this->path, 0777);
		}
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2000';
		$config['remove_spaces'] = true;
		$config['overwrite'] = true;
		$config['encrypt_name'] = false;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);            
		print_r($config);
		if (!$this->upload->do_upload($fieldname)){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);exit;
		}else{
			$upload_data = $this->upload->data();
			return $upload_data['file_name'];		
		}							
	}
}

?>
