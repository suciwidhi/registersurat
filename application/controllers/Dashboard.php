<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Dashboard extends CI_Controller{

public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('user_loggedin')!= TRUE) redirect('login');
        $this->load->model('dashboard_model', 'm');
    }

    public function index()
    {
        if ($this->session->userdata('user_prev') == 1){
        $data['tot_surat'] = $this->m->tot_surat();
        $data['tot_undangan'] = $this->m->tot_undangan();
        $data['tot_tembusan'] = $this->m->tot_tembusan();
        $data['tot_user'] = $this->m->tot_user();
        $data['content'] = 'dashboard';
        $data['active'] = 'dashboard';
        $this->load->view('layouts/master', $data);
    } else {
        $data['tot_surat'] = $this->m->tot_surat();
        $data['tot_undangan'] = $this->m->tot_undangan();
        $data['tot_tembusan'] = $this->m->tot_tembusan();
        $data['tot_user'] = $this->m->tot_user();
        $data['content'] = 'dashboard_operator';
        $data['active'] = 'dashboard_operator';
        $this->load->view('layouts/master', $data);
    }
    } 

    
    
}