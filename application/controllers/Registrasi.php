<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller{

    public function register_surat()
    {
        $data['content'] = 'reg_surat';
        $data['active'] = 'surat';
        $this->load->view('layouts/master', $data);
    }

    public function undangan_surat()
    {
        $data['content'] = 'und_surat';
        $data['active'] = 'undangan';
        $this->load->view('layouts/master', $data);
    }

    public function tembusan_sekda()
    {
        $data['content'] = 'tem_sekda';
        $data['active'] = 'tembusan';
        $this->load->view('layouts/master', $data);
    }

    public function add_register_surat()
    {
        $data['content'] = 'add_reg_surat';
        $data['active'] = 'add_register';
        $this->load->view('layouts/master', $data);
    }

    public function add_tembusan_sekda()
    {
        $data['content'] = 'add_tem_sekda';
        $data['active'] = 'add_tembusan';
        $this->load->view('layouts/master', $data);
    }

    public function add_undangan_surat()
    {
        $data['content'] = 'add_und_surat';
        $data['active'] = 'add_undangan';
        $this->load->view('layouts/master', $data);
    }
}
