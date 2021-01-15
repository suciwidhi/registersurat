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
}
