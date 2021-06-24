<?php
class Fueltype_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model('admin/role_model');
		$this->load->model('admin/group_model');
	}
	
	public function getTotalRecord() {	
		$this->db->select('count(*) as total');		
		$this->db->where('admin_status', 1);
		$query = $this->db->get("tbl_admin");
		//echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $data = $query->result();
			return $data[0]->total;
        }        
		return 0;
    }
	
	public function getRecords($start=0, $limit=10) {
		$this->db->where('admin_status !=', 5);
		$this->db->where('is_deleted', 0);
		$this->db->order_by('adminId DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get("tbl_admin");
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$role = $row->roleID;
				$row->role = $this->role_model->GetRecordById($role)->role_name;
				$data[] = $row;
			}
			return $data;
		}
		return false;
  }
	
	public function getRecordById($id) {
                $this->db->where('adminId', $id);
				$query = $this->db->get("tbl_admin");
        if ($query->num_rows() > 0) {
             foreach ($query->result() as $row) {
                $data = $row;
            }
            return $data;
        }
        return false;
    }
	
	public function save_admin_data($image=null) {
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$role_id = $this->input->post('role_id');
		$indate = $this->input->post('indate');
		$status = $this->input->post('status');
		$created_by = $this->session->userdata('adminid');
		$data = array(
					'admin_name'=>$name ,
					'admin_email'=>$email,	
					'roleID'=>$role_id,
					'admin_date'=>$indate,
					'admin_status'=>$status
				);
		
		if($this->input->post('password') != ''){
			$data['admin_password'] = md5($this->input->post('password'));
		}
		
		if($id)			
		{
			$this->db->where('adminID', $id);
			$this->db->update('tbl_admin', $data); 
		}
		else
		{
			$data['admin_created_by'] = $created_by;
			$data['admin_date']=date('Y-m-d H:i:s');
			$this->db->insert('tbl_admin',$data); 
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
										'validated' => TRUE,
										'arole' => $row->roleID
										);
						$this->session->set_userdata($data);
						return true;
				}
				return false;
		}
	}
}

?>
