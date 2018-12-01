<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
if (!function_exists('getUniqueByIdColumn')) {
    function getUniqueByIdColumn($tablename,$getcolumn,$column_name,$column_cond) {
	    $arrdata='';
        $CI = & get_instance();
        $temp = $CI->db->select('*')->from($tablename)->where($column_name,$column_cond)->get()->result();
        foreach ($temp as $t) {
            $arrdata = $t->$getcolumn;
        }
        return $arrdata;
    }

if (!function_exists('display_children')) {
     function display_children($parent, $level) {
        $count = 0;
		$CI = & get_instance();
	    $CI->db->where("parent_id",$parent);
	    $dataTree=$CI->db->select("member_id")->from("tblmembers")
	    ->get()->result();
        return $dataTree;
      } 
    }	
}

