<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/CMS_Controller.php';
class Model extends CMS_Controller {
	
	public function __Construct()
	{
	  parent::__Construct();
		ob_start();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->helper(array('form'));
		//$this->load->model('admin/component_master/parttype_model');
	  //$this->check_isvalidated();
	}	
		
	public function addlismodel($param = '')
	{		
		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/model_master/model-details');
		$this->load->view('admin/footer');
	}
	
}
?>