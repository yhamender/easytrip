<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
		if ($this->session->userdata('ADMIN_ID') == '') {
	    redirect(base_url());}
		$this->load->model('admin/Dashboard_model');
	}
	
	/*Dashboard function*/
	public function index()
	{
		$data['title']='Dashboard';
        $data['main']='admin/dashboard/index';
		$data['heading']='Easy Trip Admin Dashboard';
		$this->load->view('admin/includes/template', $data);
	}
}
