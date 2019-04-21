<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_Model{

    // public function GetMember(){
    //   $this->db->select()
    // }
    function __construct() {
      parent::__construct();
  	}

    public function action_signup($member,$datamember){
      $this->db->insert('member',$member);
      $member_id = $this->db->insert_id();

      $datamember['id_member'] = $member_id;
      $this->db->insert('data_member',$datamember);
      return $insert_id = $this->db->insert_id();
    }

    public function cek($table, $where){
      return $this->db->get_where($table,$where);
    }
}
