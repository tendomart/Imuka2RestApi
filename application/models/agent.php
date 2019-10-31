<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Deals model
class Deals_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_all_deals(){}
        public function get_deal_by_id(){}
            public function create_deal(){}
                public function delete_deal(){}
                    public function update_deal(){}


}