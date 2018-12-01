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
   /*******************************************************/
   /**This Function Used For Creating Members (Mysql DB)**/
   public function createMembers($arrmembers){
     return $this->db->insert("tblmembers",$arrmembers);
   }
} 