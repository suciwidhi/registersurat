<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model {
    
    public function tot_surat(){
        return $this->db->get('ref_register_surat')->num_rows();

    }

    public function tot_undangan(){
        return $this->db->get('ref_undangan')->num_rows();
        
    }

    public function tot_tembusan(){
        return $this->db->get('ref_tembusan')->num_rows();
        
    }

    public function tot_user(){
        return $this->db->get('ref_user')->num_rows();
        
    }
}