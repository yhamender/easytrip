<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tours extends CI_Controller {
	
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
		if ($this->session->userdata('ADMIN_ID') == '') {
	    redirect(base_url());}
		$this->load->helper("form");
		$this->load->model('admin/Tours_model');
	}
	
	/*This Function Is Used For Showing List Of Tours*/
	/*para: @title, @main , @heading*/
	public function index()
	{
		$data['title']='Tours';
        $data['main']='admin/tours/index';
		$data['heading']='Easy Trip | List Of Tours';
		$data['list_tours']=$this->Tours_model->allTourLists();
		$this->load->view('admin/includes/template', $data);
	}
	/*This Function Is Used For Showing Single Tour Detail*/
	/*para: @title, @main , @heading*/
	public function singleTourDetail($tourId)
	{
		$data['title']='Tour | Details';
        $data['main']='admin/tours/detail-tour';
		$data['heading']='Easy Trip | Single Tour Details';
		$data['list_tours']=$this->Tours_model->singleTourListById($tourId);
		$this->load->view('admin/includes/template', $data);
	}
	/*This Function Is Used For Loading CreateTour Page*/
	/*para: @title, @main , @heading*/
	public function createTourPage()
	{
		$data['title']='Tours';
        $data['main']='admin/tours/create-tour';
		$data['heading']='Easy Trip | Create New Tour';
		$this->load->view('admin/includes/template', $data);
	}
	/*This Function Is Used For Loading EditTour Page*/
	/*para: @title, @main , @heading*/
	public function editTourPage($tourId)
	{
		$data['title']='Tours';
        $data['main']='admin/tours/edit-tour';
		$data['heading']='Easy Trip | Edit Tour';
		$data['tourId']=$tourId;
		$data['single_tour']=$this->Tours_model->singleTourListById($tourId);
		$this->load->view('admin/includes/template', $data);
	}
	
	/**This Function Facilitate Json**/
	/*param: @tourId*/
	public function getTourJsonDataByTourId(){
	    $varParams = json_decode(file_get_contents('php://input'), true);
	    $tourId=$varParams['tourId'];
		$single_tour=$this->Tours_model->singleTourListById($tourId);
		echo json_encode($single_tour);
	}
	
	/**This Function Facilitate Json**/
	/*param: @tourId*/
	public function deleteTourById($tourId){
		$dataResult=$this->Tours_model->deleteTour($tourId);
		$dataResultMongo=$this->Tours_model->deleteTourMongo($tourId);
		 if($dataResult==true && $dataResultMongo==true){
	  	   $this->session->set_flashdata('status', '1');
	  	   $this->session->set_flashdata('msg', 'Tour Has Been Deleted Successfully..');
		   redirect("admin/tours/");
	     }else{
	  	   $this->session->set_flashdata('status', '0');
           $this->session->set_flashdata('msg', 'Unable To Deleted Tour Data.');
		   redirect("admin/tours/");
	     }
	}
	
	/*This Function Is Used For Creating Tour*/
	/*para: @title, @main , @heading*/
	public function createTour()
	{
	   extract($this->input->post());
	   if(!empty($this->input->post())){
	   $filename=$tour_title.time();
       $image='';
	   if(isset($_FILES['tour_image'])&&$_FILES['tour_image']['error']=='0'){
	    $config = array(
	      'upload_path' => "uploads/tour-images/",
	      'allowed_types' => "gif|jpg|png|jpeg",
	      'overwrite' => TRUE,
	      'max_size' => "2048000",
	      'file_name' => $filename);
	     $this->load->library('upload', $config);
	    if($this->upload->do_upload('tour_image'))
        {
          $data = array('upload_data' => $this->upload->data());
          $image=$data['upload_data']['file_name'];
         }
	    }
		$arrTour=array("tour_image"=>$image,"tour_title"=>$tour_title,"description"=>$description,"operator"=>$operator,"tour_type"=>$tour_type,"start_location"=>$start_location,"end_location"=>$end_location,"start_date"=>$start_date,"tour_duration"=>$tour_duration);
		 /**Inserting Data In RDBMS In MYSQL**/
		 $dataResult=$this->Tours_model->createNewTour($arrTour);
		 $last_insertId=$this->db->insert_id();
		 /**Inserting Data In NOSQL In MONGODB**/
		 $dataResultMongo=$this->Tours_model->createNewTourMongo(array("tour_id"=>$last_insertId)+$arrTour);
		 if($dataResult==true && $dataResultMongo==true){
	  	   $this->session->set_flashdata('status', '1');
	  	   $this->session->set_flashdata('msg', 'Tour Has Been Added Successfully..');
		   redirect("admin/tours/createTourPage");
	     }else{
	  	   $this->session->set_flashdata('status', '0');
           $this->session->set_flashdata('msg', 'Unable To Added Tour Data.');
	     }
		}
	}
	
	/*This Function Is Used For Updating Tour*/
	/*para: @title, @main , @heading*/
	public function updateTour()
	{
	   extract($this->input->post());
	   if(!empty($this->input->post())){
	   $filename=$tour_title.time();
       $image='';
	   if(isset($_FILES['tour_image'])&&$_FILES['tour_image']['error']=='0'){
	    $config = array(
	      'upload_path' => "uploads/tour-images/",
	      'allowed_types' => "gif|jpg|png|jpeg",
	      'overwrite' => TRUE,
	      'max_size' => "2048000",
	      'file_name' => $filename);
	     $this->load->library('upload', $config);
	    if($this->upload->do_upload('tour_image'))
        {
          $data = array('upload_data' => $this->upload->data());
          $image=$data['upload_data']['file_name'];
         }
	    }
	$arrTour=array("tour_image"=>$image,"tour_title"=>$tour_title,"description"=>$description,"operator"=>$operator,"tour_type"=>$tour_type,"start_location"=>$start_location,"end_location"=>$end_location,"start_date"=>$start_date,"tour_duration"=>$tour_duration);
		 /**Inserting Data In RDBMS In MYSQL**/
		 $dataResult=$this->Tours_model->editTour($tour_id,array_filter($arrTour));
		 /**Inserting Data In NOSQL In MONGODB**/
		 $dataResultMongo=$this->Tours_model->editTourMongo($tour_id,array_filter($arrTour));
		 if($dataResult==true && $dataResultMongo==true){
	  	   $this->session->set_flashdata('status', '1');
	  	   $this->session->set_flashdata('msg', 'Tour Has Been Updated Successfully..');
		   redirect("admin/tours/editTourPage/".$tour_id);
	     }else{
	  	   $this->session->set_flashdata('status', '0');
           $this->session->set_flashdata('msg', 'Unable To Updated Tour Data.');
	     }
	  }
	}
}
