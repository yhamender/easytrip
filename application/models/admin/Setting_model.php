<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
	}
	/*This function update session by unique session-id*/
	public function changePassword($email_id,$old_password,$new_password)
	{
	   $condition_array=array("email"=>$email_id,"password"=>$old_password);
	   $serachData=$this->db->select("*")->from("tbladmin")->where($condition_array)->get()->row();
	   if($serachData){
	    $this->db->where("email",$email_id);
       return $this->db->update("tbladmin",array("password"=>$new_password));}
	}
}
