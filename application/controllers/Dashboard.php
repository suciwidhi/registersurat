<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Dashboard extends CI_Controller{

public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('user_loggedin')!=TRUE) redirect('login');
    }

    public function index()
    {
        $data['content'] = 'dashboard';
        $data['active'] = 'dashboard';
        $this->load->view('layouts/master', $data);
    }

    
    
}