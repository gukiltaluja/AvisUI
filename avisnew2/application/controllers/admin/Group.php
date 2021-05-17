<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/CMS_Controller.php';
class Group extends CMS_Controller {
	
	public function __Construct()
	{
	  parent::__Construct();
		ob_start();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->helper(array('form'));
		//$this->load->model('admin/group_model');
		//$this->check_isvalidated();
	}	
	
	public function index($page_no = '')
	{
		$this->page($page_no);
	}	
	
	private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('admin/login');
        }
    }	
		
	public function page($page_no)
	{
		$data['heading']='Group'; 
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/sidebar');		
		
	//	$data['category'] = $this->category_model->GetRecordsControl();
		
		$per_page=50;
		$total_record	= $this->group_model->getTotalRecord();		
		$config['base_url'] = site_url().'admin/group/index';
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
		
		$array_records = $this->group_model->GetRecords($offset, $per_page);
		
		$data['records'] = $array_records; 
		$this->load->view('admin/group', $data);
		$this->load->view('admin/footer');
	}

	public function addedit($param = '')
	{
		//echo $param;die;
		// if(is_numeric($param)){
		// 	$data['heading']='Edit Group'; 
			
		// }else{
		// 	$data['heading']='Add Group'; 
		// }
		
		// $group_id = $param;
		// if($group_id){
		// 	$array_records = $this->group_model->GetRecordById($group_id);
		// }else{
		// 	$array_records=array();
		// }		
		// $data['row'] = $array_records;
		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/add-edit-group');
		$this->load->view('admin/footer');
	}
	
	
	
	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		if($this->form_validation->run() == FALSE){
			redirect('admin/group/addedit');
		}
		else{
			
			$save = $this->group_model->saveGroup();
			
			if($save){
				redirect('admin/group');
			}else{
				
			}
		}	
	}	
}
?>