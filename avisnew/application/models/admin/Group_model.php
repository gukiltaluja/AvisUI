<?php
class Group_model extends CI_Model {
    
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getRecords() {
		//$this->db->where('group_status !=', 5);
		$this->db->where('is_deleted', 0);
		$query = $this->db->get("tbl_group");
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				//$row->parent_name = '';
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	
	
	public function getTotalRecord() {	
		$this->db->select('count(*) as total');
		$this->db->where('group_status !=', 5);
		$query = $this->db->get("tbl_group");
        if ($query->num_rows() > 0) {
            $data = $query->result();
			return $data[0]->total;
        }        
		return 0;
    }
	
	
	public function getRecordBygroupID($id) {
        $this->db->where('groupID', $id);
				$query = $this->db->get("tbl_group");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = $row;
            }
            return $data;
        }
        return false;
    }
	
	public function saveGroup() {
		$id = $this->input->post('id');
		$name = $this->input->post('name');
        $status = $this->input->post('status');
		$menu = $this->input->post('menu');

		$data = array(
			'group_name'=>$name,
			'group_type'=>$menu,			
			'group_status'=>$status,			
		);
		
		if($id)			
		{
			$this->db->where('groupID', $id);
			$this->db->update('tbl_group', $data);
		}
		else
		{
			
			$data['group_date']=date('Y-m-d H:i:s');
			$this->db->insert('tbl_group', $data); 
			$id = $this->db->insert_id();
		}		
		return true;
	}
}
