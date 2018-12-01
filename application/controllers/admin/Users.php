<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
		if ($this->session->userdata('ADMIN_ID') == '') {
	    redirect(base_url());}
	    $this->load->helper(array('form','common_helper'));
		$this->load->model('admin/User_model');
	}
	/*List Of Session function*/
	public function index(){
		$data['title']='List Of Register Users';
        $data['main']='admin/users/index';
		$data['heading']='List Of Registered Users';
		$data['user_list']=$this->User_model->getAllUsers();
        $this->load->view('admin/includes/template', $data);
	}
	/*User function Used For Referral Member*/
	public function referralMember(){
	  $data['title']='Create New Referral Member';
	  $data['heading']='Create New Referral Member';
      $data['main']='admin/users/index';
	  $this->load->view('admin/includes/template', $data);
	}
	/*User function Used For Referral Member*/
	public function referralMemberTree(){
	  $data['title']='Create Referral Member Tree';
	  $data['heading']='Create Referral Member Tree';
      $data['main']='admin/users/referralMemberTree';
	  $this->load->view('admin/includes/template', $data);
	}
		
}