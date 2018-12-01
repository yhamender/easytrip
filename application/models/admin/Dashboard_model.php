<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
    
	/*Constructor*/
	public function __construct(){
	    parent::__construct();
	}
	/*Function User Count*/
	public function user_count()
	{
		return $this->db->count_all('tbl_users');
	}
	/*Function Category Count*/
	public function category_count()
	{
		return $this->db->count_all('tbl_categories');
	}
	/*Function Category Count*/
	public function event_count()
	{
		return $this->db->count_all('tbl_events');
	}
}
