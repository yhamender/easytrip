<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
		if ($this->session->userdata('ADMIN_ID') == '') {
	    redirect(base_url());}
	    $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->model('admin/Setting_model');
	}
	/*List Of Setting function*/
	public function index(){
		$data['title']='Change Settings';
        $data['main']='admin/settings/index';
		$data['heading']='Admin & Website Settings';
        $this->load->view('admin/includes/template', $data);
	}
	/*This Function Used For Change Admin Password*/
	public function changePassword(){
	  extract($this->input->post());
	  $this->Setting_model->changePassword($email_id,md5($old_password),md5($new_password));
	  redirect('admin/settings/index');
	}
	/*This Function Used For Upload Image Of Website & Logo*/
	public function upload() {
       if($this->input->post('upload')) {
        $config['upload_path'] = '../uploads/website-images/'; 
        $config['file_name'] = $_FILES['userfile']['tmp_name'];
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'jpg|jpeg|png|gif';
        $config["max_size"] = 1024;
        $config["max_width"] = 400;
        $config["max_height"] = 400;
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload()) {               
            $this->data['error'] = $this->upload->display_errors();
        } else {                                   
        }  
     }
  }
}