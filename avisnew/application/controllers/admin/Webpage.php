<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webpage extends CMS_Controller {
	
	public function __Construct()
	{
	  parent::__Construct();
		ob_start();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->helper(array('form'));
		$this->load->model('admin/webpage_model');
		//$this->check_isvalidated();
	}	
	
	public function index($page_no = '')
	{
		$this->page($page_no);
	}
		
	public function page($page_no)
	{
		$data['heading']='Webpage'; 
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/sidebar');		
		
		$per_page=50;
		$total_record	= $this->webpage_model->getTotalRecord();		
		$config['base_url'] = site_url().'admin/webpage/index';
		$config['total_rows'] = $total_record;
		$config['per_page'] = $per_page;
		$config["uri_segment"] = 4;
		
		$this->pagination->initialize($config);
		$data['pagination_links'] = $this->pagination->create_links();
		
		if($page_no=='')
			$limit=0;
		else
			$limit=$config["per_page"]*($page_no-1);
			
		$offset = ($limit) ? $limit : 0;
		$data['offset'] = $offset;
		$array_records = $this->webpage_model->GetRecords($offset, $per_page);
		
		$data['records'] = $array_records; 
		$this->load->view('admin/webpage', $data);
		$this->load->view('admin/footer');
	}

	public function addedit($param = '')
	{
		if(is_numeric($param)){
			$data['heading']='Edit Webpage'; 
			
		}else{
			$data['heading']='Add Webpage'; 
		}
		
		$webpage_id = $param;
		if($webpage_id){
			$array_records = $this->webpage_model->GetRecordById($webpage_id);
		}else{
			$array_records=array();
		}
		
		$data['row'] = $array_records; 
		$data['gallerys'] = $this->webpage_model->getGalleryRecords();
		
				
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/add-edit-webpage', $data);
		$this->load->view('admin/footer');
	}
	
	
	
	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		if($this->form_validation->run() == FALSE){
			redirect('admin/webpage/addedit');
		}
		else{
			if($_FILES['image']['name']!= ""){
				$image = $this->webpage_model->upload('image');
			}else{
				$image = $this->input->post('image_old');
			}
			
			$save = $this->webpage_model->saveWebpage($image);
			
			if($save){
				redirect('admin/webpage');
			}else{
				
			}
		}	
	}
	
	public function gallery($webpage_id)
	{
		$this->output->enable_profiler(false);
		$data['heading']='Gallery Bottom'; 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$array_records = $this->webpage_model->getGalleryRecordsById($webpage_id);
		
		$data['webpageId'] = $webpage_id;
		$data['records'] = $array_records;
		
		$this->load->view('admin/gallery-bottom' ,$data);
		$this->load->view('admin/footer');
	}
	
	function saveGallery()
    {
		$id = $this->input->post('webpageId');
		$image = $this->webpage_model->upload_multi('Filedata', "public/uploads/webpage/$id/");
		$save = $this->webpage_model->saveGallery($image);
    }
    
    public function save_title_details()
	{
		$id = $this->input->post('webpageId');
		$save = $this->webpage_model->save_title_details();
		redirect("/admin/webpage/gallery/$id");
	}
	
	function delete($webpageId ,$id)
    {
		$save = $this->webpage_model->delete($id);
		if($save)
		redirect("/admin/webpage/gallery/$webpageId");
    }
    
    public function home_image()
	{
		$data['heading']='Home Image'; 
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/sidebar');		
		
		$array_records = $this->webpage_model->getHomeImageRecords();
		
		$data['records'] = $array_records;
		$this->load->view('admin/home-image' ,$data);
		$this->load->view('admin/footer');
	}

	public function addeditHomeImage($param = '')
	{
		if(is_numeric($param)){
			$data['heading']='EditHome Image'; 
			
		}else{
			$data['heading']='Add Home Image'; 
		}
		$id = $param; 
		$data['row'] = $this->webpage_model->getHomeImageRecordsById($id);
		
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/add-edit-home-image',$data);
		$this->load->view('admin/footer');
	}
	
	public function saveHomeImage()
	{
		if($_FILES['image']['name']!= ""){
				$image = $this->webpage_model->upload('image');
			}else{
				$image = $this->input->post('image_old');
			}
		$save = $this->webpage_model->saveHomeImage($image);
		if($save){
				redirect('admin/webpage/home_image');
		}else{
				
		}	
	}
}
?>
