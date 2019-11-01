<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Deals controller
class Agent_Controller extends  CI_Controller{

 public function __construct(){
     parent::__construct();
     //$this->load->helper('url');
     $this->load->model('Agent_model');
 }
 

 public function index(){
     $data['p']=$this=$Agent_model->get_all_deals()
 
 }


}