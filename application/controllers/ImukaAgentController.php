<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Deals controller
class Deals extends  CI_Controller{

 public function __construct(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->model('Deals_model');
 }
 

 public function index(){
     $data['p']=$this=$Agent_model->get_all_deals()
 
 }


}