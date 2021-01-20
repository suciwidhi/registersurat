<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function login_user($username){
        $this->db->select('*');
        $this->db->from('ref_user');
        $this->db->where('user_username', $username);
        $user = $this->db->get();
        return $user;
    }

    public function update_last_login($data, $where){
        $this->db->where($where);
        $this->db->update('ref_user', $data);
    }
}