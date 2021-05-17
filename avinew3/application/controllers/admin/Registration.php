<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require APPPATH . '/libraries/CMS_Controller.php';
class Registration extends CMS_Controller {
	
	public function __Construct()
	{
	  parent::__Construct();
		ob_start();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->helper(array('form'));
		//$this->load->model('admin/registration_model');
		
		//$this->check_isvalidated();
	}	
	
	public function index($page_no = '')
	{
		$this->page($page_no);
	}	
		
	public function page($page_no)
	{
		$data['heading']='Registration'; 
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/sidebar');		
		$per_page=50;
		$total_record	= $this->registration_model->getTotalRecord();		
		$config['base_url'] = site_url().'admin/exhibition/index';
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
		
		$array_records = $this->registration_model->GetRecords($offset, $per_page);
		
		$data['records'] = $array_records; 
		$this->load->view('admin/registration', $data);
		$this->load->view('admin/footer');
	}

	public function addedit($param = '')
	{
		// if(is_numeric($param)){
		// 	$data['heading']='Edit Registration';
		// 	$data['heading2']='Contact Details';
		// 	$data['heading4']='Company details'; 
			
		// }else{
		// 	$data['heading']='Add Registration';
		// 	$data['heading2']='Contact Details';
		// 	$data['heading4']='Company details'; 
		// }
		// $participant_id = $param;
		// if($participant_id){
		// 	$array_records = $this->registration_model->GetRecordById($participant_id);
		// }else{
		// 	$array_records=array();
		// }		
		// $data['row'] = $array_records;				
		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/add-edit-registration');
		$this->load->view('admin/footer');
	}
	
	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		if($this->form_validation->run() == FALSE){
			redirect('admin/registration/addedit');
		}
		else{
			// if($_FILES['gstin_certificate']['name']!= ""){
			// 	$gstin_certificate = $this->registration_model->upload_gstin('gstin_certificate');
			// }else{
			// 	$gstin_certificate = $this->input->post('gstin_certificate_old');
			// }
			// $save = $this->exhibition_model->save($gstin_certificate);
			$save = $this->registration_model->save();
			if($save){ 	 	
				redirect('admin/registration');
			}else{
				
			}
		}	
	}
	
	public function download()
	{
		$data = $this->participant_model->downloadParticipant();
		
		$this->export_csv($data, 'registration-'.time().'.csv');
		
		
	}
	
	public function export_csv($data, $filename){
		header("Content-type: application/csv");
		header("Content-Disposition: attachment; filename=\"$filename\"");
		header("Pragma: no-cache");
		header("Expires: 0");

		$handle = fopen('php://output', 'w');

		foreach ($data as $data) {
			fputcsv($handle, $data);
		}
			fclose($handle);
		exit;
	}	
}
?>
