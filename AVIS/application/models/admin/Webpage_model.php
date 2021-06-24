<?php
class Webpage_model extends CI_Model {
   
   private $path = 'public/uploads/webpage/'; 
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function GetRecords() {
		$this->db->where('status !=', 5);
		$query = $this->db->get("tbl_webpage");
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
	
	public function getRecordById($id) {
        $this->db->where('webpage_id', $id);
		$query = $this->db->get("tbl_webpage");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = $row;
            }
            return $data;
        }
        return false;
    }
	
	
	public function getTotalRecord() {	
		$this->db->select('count(*) as total');
		$this->db->where('status !=', 5);
		$query = $this->db->get("tbl_webpage");
        if ($query->num_rows() > 0) {
            $data = $query->result();
			return $data[0]->total;
        }        
		return 0;
    }
	
		public function saveWebpage($image=null) {
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$meta_title = $this->input->post('meta_title');
		$meta_description = $this->input->post('meta_description');
		$description = $this->input->post('description');
		$short_description = $this->input->post('short_description');
		$meta_keywords = $this->input->post('meta_keywords');		
		$status = $this->input->post('status');
		$gallery_id = $this->input->post('gallery_id');
		$bottom_gallery_title = $this->input->post('bottom_gallery_title');
		
		$data = array(
			'title'=>$title,
			'description'=>$description,
			'short_description'=>$short_description,
			'meta_title'=>$meta_title,
			'meta_description'=>$meta_description,
			'meta_keywords'=>$meta_keywords,
			'image'=>$image,
			'status'=>$status,	
			'gallery_id'=>$gallery_id,	
			'bottom_gallery_title'=>$bottom_gallery_title	
			//'date_published'=>$date_published
		);
		
		if($id)			
		{
			$data['slug'] = url_title($title, '-', TRUE);
			$data['modified_date']= date('Y-m-d H:i:s');
			$this->db->where('webpage_id', $id);
			$this->db->update('tbl_webpage', $data);
		}
		else
		{
			$data['slug'] = url_title($title, '-', TRUE);
			$data['added_date']= date('Y-m-d H:i:s');
			$this->db->insert('tbl_webpage', $data); 
			$id = $this->db->insert_id();
		}
		
		if($_FILES['image']['name']!= ""){
			$filename = $_FILES['image']['name'];
			$path = $this->path.$id.'/';
			if (!is_dir($path))
			{
				mkdir($path, 0777);
			}
			rename($this->path.$filename, $path.$filename);
		}
		
		return true;
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
		
		if (!$this->upload->do_upload($fieldname)){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$upload_data = $this->upload->data();
			return $upload_data['file_name'];		
		}							
	}
	
	public function getGalleryRecordsById($id) 
	{	
		$this->db->where('webpage_id', $id);
		$this->db->where('status !=', 5);
		//$this->db->order_by('id','desc');
		$query = $this->db->get("tbl_gallery_bottom");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }			
            return $data;
        }
        return false;
	}
	
	function upload_multi($fieldname, $path='')
	{
		if (!is_dir($path))
		{
			mkdir($path, 0777, true);
		}
		
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2000';
		$config['remove_spaces'] = true;
		$config['overwrite'] = true;
		$config['encrypt_name'] = false;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);            
		
		if (!$this->upload->do_upload($fieldname)){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			exit;
		}else{
			$upload_data = $this->upload->data();
			return $upload_data['file_name'];		
		}							
	}
	
	public function saveGallery($image=null) {
		$id = $this->input->post('webpageId');
		
		$data = array(
			'webpage_id'=>$id,
			'image'=>$image,
			'status'=>1
		);
		 $data['indate'] = date('Y-m-d H:i:s');
		$this->db->insert('tbl_gallery_bottom', $data);
		return true;
	}
	
	public function save_title_details() {
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		
		$count = count($id);
        for($i=0; $i<$count; $i++)
		{
			$data = array(
			   'title' => $title[$i], 
			   'description' => $description[$i],
			   'status' => 1
		    );
			$this->db->where('id', $id[$i]);
			$this->db->update('tbl_gallery_bottom', $data);
		}
		return true;
	}
	
	public function delete($id) {
		$data['status'] = 5;
		$this->db->where('id', $id);
		$this->db->update('tbl_gallery_bottom', $data);
		return true;
	}
	
	public function getGalleryRecords() 
	{	
		$this->db->where('status', 1);
   		//$this->db->order_by('id','desc');
   		$query = $this->db->get('tbl_gallery');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }			
            return $data;
        }
        return false;
	}
	
	public function getHomeImageRecords() {
		$this->db->where('status !=', 5);
		$query = $this->db->get("tbl_home_page_image");
		$data = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	public function getHomeImageRecordsById($id) {
        $this->db->where('id', $id);
		$query = $this->db->get("tbl_home_page_image");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function saveHomeImage($image = null)
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$url = $this->input->post('url');
		$status = $this->input->post('status');
		$data = array(
					'title'=>$title,
					'description'=>$description,
					'image'=>$image,
					'url'=>$url,
					'status'=>$status
					);
						
		if($id){
			$this->db->where('id',$id);
			$this->db->update('tbl_home_page_image',$data);
		}else{
			$data['indate']= date('Y-m-d H:i:s'); 
			$query = $this->db->insert('tbl_home_page_image',$data);
		}
		return true;
	}
}
