<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class WS_Controller extends MY_Controller
{
    function __construct ()
    {
        parent::__construct();
		ob_start();
    }
    
	function website_header($seo_data = ''){
		$data['seo_data'] = $seo_data;	
		$this->load->view('common/header', $data);
	}

	function website_right($additional_content = ''){
		$data = array();
		$this->load->view('common/right', $data);
	}

	function website_footer(){
		$data = array();
		$this->load->view('common/footer', $data);
	}
}