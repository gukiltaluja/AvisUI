<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function __Construct() {
		ob_start();
		parent::__Construct();
		$this->load->helper('url');
				
	}
	
	function index($msg='') {
		$data['msg'] = $msg;
		$this->load->view('admin/login', $data);
	}
	
	public function process(){
        $this->load->model('admin/admin_model');
        $result = $this->admin_model->validate();
        if(! $result){
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
			echo "Loading...";
            redirect(base_url('admin/home'));
			
        }        
    }
        
}
