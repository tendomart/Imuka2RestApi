<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Deals model
class Agent_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
        
    }

    public function get_all_deals(){
        $query=$this->db->get('agent');
        return $query->result();
    }
        //public function get_deal_by_id(){}
            public function create_deal(){

            }
                public function delete_deal(){}
                    public function delete_deal_by_id(){}
                    public function update_deal(){}


}