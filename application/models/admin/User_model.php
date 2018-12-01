<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
   /*
   * Constructor;
   */
   public function __construct()
   { 
      parent::__construct();  
   }
   /****This Function Return All Users****/
	public function getAllUsers()
	{
	   return $this->db->select("*")
	              ->from("tbllogin")
				  ->order_by('id','desc')
				  ->get()
				  ->result(); 
    }
   /****This Function Return Single Users****/
    public function getSingleUser($userId)
	{
	   return $this->db->select("*")
	              ->from("tbllogin")
				  ->where('id',$userId)
				  ->get()
				  ->result();
    }
    /*This Function Returns All Events Created By User*/
	public function getEventsByUser($user_id)
	{
	   $this->db->where('user_id',$user_id);
	   return $this->db->select("*")
		  ->from("tbl_events")
		  ->order_by('id','desc')
		  ->get()
		  ->result(); 
	}	
} 