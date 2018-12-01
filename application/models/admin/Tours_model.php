<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tours_model extends CI_Model {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
		$this->load->library("mongo_db");
	}
	/*******************************************************/
	/*Function Create New Tour (MYSQL DB)*/
	public function createNewTour($arrTour)
	{
		return $this->db->insert('tbltourplans',$arrTour);
	}
	/*******************************************************/
	/*Function Edit Tour (MYSQL DB)*/
	public function editTour($tourId,$arrTour)
	{
	   $this->db->where("id",$tourId);
	   return $this->db->update('tbltourplans',$arrTour);
	}
	/*******************************************************/
	/*Function Delete Tour (MYSQL DB)*/
	public function deleteTour($tourId){
	   $this->db->where("id",$tourId);
	   return $this->db->delete('tbltourplans');
	}
	/*******************************************************/
	/*Function Fetch All Tours Data (MYSQL DB)*/
	/**params:no parameters**/
	public function allTourLists()
	{
		return $this->db->select("*")
		->from('tbltourplans')
		->get()->result();
	}
	/*******************************************************/
	/*Function Fetch Single Tours Data By Id (MYSQL DB)*/
	/**params:@tourId**/
	public function singleTourListById($tourId)
	{
	    $this->db->where("id",$tourId);
		return $this->db->select("*")
		->from('tbltourplans')
		->get()->result();
	}
   /*******************************************************/
   /**This Function Used For Creating Tour (Mongo DB)**/
   public function createNewTourMongo($arrTour){
     return $this->mongo_db->insert("tbltourplans",$arrTour);
   }
   /*******************************************************/
   /**This Function Used For Updating Tour (Mongo DB)**/
   public function editTourMongo($tourId,$arrTour){
      //return $this->mongo_db->update("tbltourplans",array("tour_id"=>$tourId),array('$set'=>$arrTour), array("upsert" => true, "multiple" => true));
   
     // return $this->mongo_db->where('tour_id',$tourId)
      //->push($arrTour)
      //->update('tbltourplans');
      return $this->mongo_db->update("tbltourplans",$arrTour,array('multiple'=>TRUE,'tour_id'=>$tourId));
	 
       //$option = array('upsert' => false);
	  // $this->mongo_db->where(array('tour_id'=>$tourId));
      // return $this->mongo_db->set(array("$set"=>$arrTour)); 
      // $this->mongo_db->update('tbltourplans',$option,true);
   }
    /*******************************************************/
	/*Function Fetch All Tours Data (MONGO DB)*/
	/**params:no parameters**/
	public function allTourListsMongo()
	{
		return $this->mongo_db->get('tbltourplans');
	}
	/*******************************************************/
	/*Function Delete Tour (MONGO DB)*/
	public function deleteTourMongo($tourId){
	    $this->db->where("tour_id",$tourId);
	    return $this->mongo_db->delete('tbltourplans');
	}
}
