<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

   /***************************************************************/
   /**Constructor Code**/
    public function __construct() {
        parent::__construct();
		$this->load->helper(array("form"));
		$this->load->model("User_model");
		$this->load->model('admin/Tours_model');
		$this->load->helper('common_helper');
		//$this->load->library('Solarium_client');
    }
	/***************************************************************/
	/**Home Page Code**/
    public function index() {
        $data['title']='EasyTourTrip | Home';
		$data['tour_lists']=$this->Tours_model->allTourListsMongo();
        $this->load->view('welcome_message',$data);
    }
	/***************************************************************/
	/**Solr Search Page**/
	public function solrSearch() {
        $data['title']='EasyTourTrip | Solr Serach';
		$data['tour_lists']=$this->Tours_model->allTourListsMongo();
        $this->load->view('welcome_message',$data);
    }
}
