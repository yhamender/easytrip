<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Solarium_client
{
    public function __construct(){
        $CI =& get_instance();
        $CI->config->load('solarium');
        require_once APPPATH.'/third_party/Solarium/Autoload.php';
        $this->solr = new Solarium\Client($CI->config->item('solarium_endpoint'));
    }
}
