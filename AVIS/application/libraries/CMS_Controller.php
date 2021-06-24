<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class CMS_Controller extends MY_Controller
{
    function __construct ()
    {
        parent::__construct();
        
        $this->load->helper('url');
        
    }
	
	function action($act, $id, $act_val = ''){
		$module = $this->uri->segment(2);
		switch($module){
			case 'category':
			$tableName = 'tbl_category';
			break;
			case 'article':
			$tableName = 'tbl_article';
			break;
			case 'article_image':
			$tableName = 'tbl_article_images';
			break;
			case 'author':
			$tableName = 'tbl_author';
			break;
			case 'admin':
			$tableName = 'tbl_admin';
			break;
			default:
			$tableName = 'tbl_'.$module;
			break;
		}
		
		switch($act){
			case 'delete':
			$data = array('status'=>5);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
			case 'status':
			$data = array('status'=>$act_val);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
			case 'menu_item':
			$data = array('menu_item'=>$act_val);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
			case 'home_page':
			$data = array('home_page'=>$act_val);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
			case 'show_home':
			$data = array('show_home'=>$act_val);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
			case 'carousel':
			$data = array('carousel'=>$act_val);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
			case 'thumbnail':
			$data = array('thumbnail'=>$act_val);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
			case 'priority':
			$data = array('priority'=>$act_val);
			$this->db->where('id', $id);
			$this->db->update($tableName, $data);
			break;
			
		}
	}
}