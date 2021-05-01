<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/CMS_Controller.php';
class Rv extends CMS_Controller {
	
	public function __Construct()
	{
	  parent::__Construct();
		ob_start();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->helper(array('form'));
		//$this->load->model('admin/component_master/rv_model');
	  //$this->check_isvalidated();
	}	
	
	public function index($page_no = '')
	{
		$this->page($page_no);
	}	
	
	private function check_isvalidated(){
        if(!$this->session->userdata('validated')){
          redirect('admin/login');
        }
				
    }	
		
	public function page($page_no)
	{
		$data['heading']='Admin'; 
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/sidebar');
		
		$per_page=10;
		$total_record	= $this->rv_model->getTotalRecord();		
		$config['base_url'] = site_url().'admin/admin/index';
		$config['total_rows'] = $total_record;
		$config['per_page'] = $per_page;
		$config["uri_segment"] = 4;
		
		$config['cur_tag_open'] = '<li><a class="current">';
		$config['cur_tag_close'] = '</a></li>';
		
		$this->pagination->initialize($config);
		$data['pagination_links'] = $this->pagination->create_links();
		
		if($page_no=='')
			$limit=0;
		else
			$limit=$config["per_page"]*($page_no-1);
			
		$offset = ($limit) ? $limit : 0;
		
		$array_records = $this->rv_model->GetRecords($offset,$per_page);
				
		$data['records'] = $array_records;
		$this->load->view('admin/admin', $data);
		$this->load->view('admin/footer');
	}
	
	public function addeditrv($param = '')
	{
		//echo "hello";die;
		// if(is_numeric($param)){
		// 	$data['heading']='Edit Admin'; 
		// }else{
		// 	$data['heading']='Add Admin'; 
		// }
		
		// if($param){
		// 	$array_records = $this->rv_model->getRecordById($param);
		// }else{
		// 	$array_records=array();
		// }
		
		// $data['row'] = $array_records;
		 
		// $roles = $this->role_model->getRecords();
		// $data['roles'] = $roles;
		
		// $groups = $this->rv_model->getRecords();
		// $data['groups'] = $groups;
		
		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/component_master/add-edit-rv');
		$this->load->view('admin/footer');
	}
	
	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		if($this->form_validation->run() == FALSE){
			redirect('admin/admin/addedit');
		}
		else{
			
			$save = $this->rv_model->save_admin_data();
			if($save){
				redirect('admin/admin/index');
			}else{
				
			}
		}	
	}	
}
?>