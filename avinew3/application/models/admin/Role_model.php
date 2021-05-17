<?php
class Role_model extends CI_Model {
    
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getRecords() {
		$this->db->where('role_status !=', 5);
		$query = $this->db->get("tbl_role");
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$row->parent_name = '';
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	public function getTotalRecord() {	
		$this->db->select('count(*) as total');
		$this->db->where('role_status !=', 5);
		$query = $this->db->get("tbl_role");
        if ($query->num_rows() > 0) {
            $data = $query->result();
			return $data[0]->total;
        }        
		return 0;
    }
	
	public function getRecordById($id) {
        $this->db->where('roleID', $id);
				$query = $this->db->get("tbl_role");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = $row;
            }
            return $data;
        }
        return false;
    }
	
	public function saveRole() {
		$id = $this->input->post('id');
		$name = $this->input->post('name');
        $status = $this->input->post('status');
		$menu = $this->input->post('menu');
		

		$data = array(
			'role_name'=>$name,
			'role_description'=>$menu,			
			'role_status'=>$status,
			
		);
		
		if($id)			
		{
			$this->db->where('roleID', $id);
			$this->db->update('tbl_role', $data);
		}
		else
		{
			
			$data['role_date']=date('Y-m-d H:i:s');
			$this->db->insert('tbl_role', $data); 
			$id = $this->db->insert_id();
		}
		
		return true;
	}
}