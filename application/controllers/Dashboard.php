<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function index()
    {
        $data['content'] = 'dashboard';
        $data['active'] = 'dashboard';
        $this->load->view('layouts/master', $data);
    }

    
    
}