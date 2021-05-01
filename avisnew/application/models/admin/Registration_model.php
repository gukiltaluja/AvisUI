<?php
class Registration_model extends CI_Model {
    
	private $path = 'public/uploads/participant/';
	private $event_id = '';
    
	function __construct(){
		parent::__construct();
		$this->load->database();
		//$this->event_id = getEventID();
	}
	
	public function GetTotalRecord() {	
		$date = $this->input->get('date');
		if($date != '')
		$this->db->where('date(indate)', $date);		
		$this->db->select('count(*) as total');		
		$this->db->where('status !=', 5);				
		$query = $this->db->get("tbl_registration");
		//echo $this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            $data = $query->result();
           // print_r($data);die;
			return $data[0]->total;
        }        
		return 0;
    }
	
	public function GetRecords($start=0, $limit=10) {
		$date = $this->input->get('date');
		if($date != '')
		$this->db->where('date(indate)', $date);
		$this->db->where('tbl_registration.is_deleted', 0);
		$this->db->select('tbl_registration.*');
		//$this->db->where('tbl_registration.status !=', 5);
		//$this->db->where('tbl_participant.event_id', $this->event_id);
		$this->db->order_by('tbl_registration.id ASC');
		$this->db->limit($limit,$start);
		$this->db->from('tbl_registration');
		
		$query = $this->db->get();
		
		//echo $this->db->last_query();
		
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	public function GetRecordsControl() {
		$this->db->where('status', 1);
		//$this->db->where('event_id', $this->event_id);
		
		$query = $this->db->get("tbl_exhibition");
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	public function GetRecordById($id) {
        $this->db->where('id', $id);
		//$this->db->where('is_deleted', $this->event_id);
		$query = $this->db->get("tbl_registration");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = $row;
            }
            return $data;
        }
        return false;
    }
	
	public function  save($gstin_certificate = null) {
		
		$id = $this->input->post('id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$company = $this->input->post('company');
		//$designation = $this->input->post('designation');
		$address1 = $this->input->post('address1');
		$address2 = $this->input->post('address2');
		$phone = $this->input->post('phone');
		$mobile = $this->input->post('mobile');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zipcode = $this->input->post('zipcode');
		$status = $this->input->post('status');
		//$gstin = $this->input->post('gstin');
		//echo "<pre>";print_r($_POST);die;
		$data = array(
			'fname'=>$fname,
			'lname'=>$lname,
			'email'=>$email,
			'company'=>$company,
			'designation'=>$designation,
			'address1'=>$address1,
			'address2'=>$address2,
			'phone'=>$phone,
			'mobile'=>$mobile,
			'city'=>$city,
			'state'=>$state,
			'zipcode'=>$zipcode,
			'status'=>$status,
			//'gstin'=>$gstin,
			//'gstin_certificate'=>$gstin_certificate
		);
		if($id)			
		{
			if($password != ''){
				$data['password'] = md5($password);
			}
				
			$this->db->where('id', $id);
			$this->db->update('tbl_registration', $data);
		}
		else
		{
			$created_by = $this->session->userdata('adminid');
			$data['password'] = md5($password);
			//$data['event_id'] = $this->event_id;
			$data['indate'] = date('Y-m-d H:i:s');
			$this->db->insert('tbl_registration',$data);
		}
		
		return true;
	}
	
	function upload_gstin($fieldname)
	{
		$path = 'public/uploads/gstin';
		if (!is_dir($path))
		{
			mkdir($path, 0777, true);
		}		
		$config['upload_path'] = $path;
		$config['allowed_types'] = '*';
		$config['max_size'] = '30000';
		$config['remove_spaces'] = true;
		$config['file_ext_tolower'] = true;
		$config['overwrite'] = false;
		$config['encrypt_name'] = false;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);            
		
		if (!$this->upload->do_upload($fieldname)){
			$error = array('error' => $this->upload->display_errors());
			echo "Invalid file type.";
			//print_r($error);
		}else{
			$upload_data = $this->upload->data();
			return $upload_data['file_name'];
		}
	}
	
	public function downloadParticipant() {
		
		$this->db->select("1 as Sr_no ,fname as First Name , lname as Last Name , email as Email , company as Company , designation as Designation , address1 as Address , mobile as Mobile , state as State , city as City , zipcode as Zipcode , gstin as GSTIN ,indate as Date");	
		$this->db->where('status !=', 5);
		$this->db->from('tbl_participant');
		
		$query = $this->db->get();
		
		$data = array();
		if ($query->num_rows() > 0) {
			$cnt = 1;
			foreach ($query->result_array() as $row) {
				$row['Sr_no'] = $cnt;
				if($cnt == 1){
					$data[] = array_keys($row);
				}
				$data[] = $row;
				$cnt++;
			}
			return $data;
		}
		return false;
	}
}

