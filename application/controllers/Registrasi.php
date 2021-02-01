<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // if ($this->authentication->is_loggedin() === false) redirect('auth/logout');
        $this->load->model('master_model', 'model');
    }

   
    function ambildata(){
        $dataRegister = $this->model->ambildata('ref_register_surat');
        echo json_encode($dataRegister);
    }

    function ambildata2(){
        $dataTembusan = $this->model->ambildata2('ref_tembusan');
        echo json_encode($dataTembusan);
    }

    function ambildata3(){
        $dataUndangan = $this->model->ambildata3('ref_undangan');
        echo json_encode($dataUndangan);
    }
    function ambildata4(){
        $dataJenisRegister = $this->model->ambildata4('ref_jenisreg')->result();
        echo json_encode($dataJenisRegister);
    }
    function ambildata5(){
        $dataJenisUndangan = $this->model->ambildata5('ref_jenisundangan')->result();
        echo json_encode($dataJenisUndangan);
    }
    function hapusdata(){
        $id=$this->input->post('register_no_urut');
        $where=array('register_no_urut' => $id);
        echo json_encode($this->model->hapusdata($where,'ref_register_surat'));
    }

    function hapusdata2(){
        $id=$this->input->post('tembusan_no_urut');
        $where=array('tembusan_no_urut' => $id);
        echo json_encode($this->model->hapusdata2($where,'ref_tembusan'));
    }

    function hapusdata3(){
        $id=$this->input->post('undangan_no_urut');
        $where=array('undangan_no_urut' => $id);
        echo json_encode($this->model->hapusdata3($where,'ref_undangan'));
    }
    function hapusdata4(){
        $id=$this->input->post('jenisreg_id');
        $where=array('jenisreg_id' => $id);
        echo json_encode($this->model->hapusdata4($where,'ref_jenisreg'));
    }
    function hapusdata5(){
        $id=$this->input->post('jenisundangan_id');
        $where=array('jenisundangan_id' => $id);
        echo json_encode($this->model->hapusdata5($where,'ref_jenisundangan'));
    }

    function editdata(){
        $id=$this->input->post('register_no_urut');
        $data=array(
            'register_tanggal_masuk' => $this->input->post('register_tanggal_masuk'),
            'register_asal_surat' => $this->input->post('register_asal_surat'),
            'register_no_surat' => $this->input->post('register_no_surat'),
            'register_tanggal_surat' => $this->input->post('register_tanggal_surat'),
            'register_jenis_surat' => $this->input->post('register_jenis_surat'),
            'register_perihal' => $this->input->post('register_perihal'),
            'register_kode' => $this->input->post('register_kode'),
            'register_keterangan' => $this->input->post('register_keterangan'),
            'register_upload_dokumen' => $this->input->post('register_upload_dokumen'),
        );
        $dataregis = $this->model->editdata($data, $id);

        echo json_encode($dataregis);
    }

    function editdata2(){
        $id=$this->input->post('tembusan_no_urut');
        // $data['jenissurat']=$this->model->get_jenisundangan();
        // $data['register_surat']=$this->model->get_jenisreg();
        $data=array(
            // 'tembusan_no_urut' => $this->input->post('tembusan_no_urut)'),
            'tembusan_asal_surat' => $this->input->post('tembusan_asal_surat'),
            'tembusan_tanggal_surat' => $this->input->post('tembusan_tanggal_surat'),
            'tembusan_no_surat' => $this->input->post('tembusan_no_surat'),
            'tembusan_keterangan' => $this->input->post('tembusan_keterangan'),
        );
        $datatembusan = $this->model->editdata2($data, $id);

        echo json_encode($datatembusan);
    }

    function editdata3(){
        $id=$this->input->post('undangan_no_urut');
        $data=array(
            'undangan_dari' => $this->input->post('undangan_dari'),
            'undangan_no_surat' => $this->input->post('undangan_no_surat'),
            'undangan_tanggal' => $this->input->post('undangan_tanggal'),
            'undangan_jenis_undangan' => $this->input->post('undangan_jenis_undangan'),
            'undangan_uraian' => $this->input->post('undangan_uraian'),
            'undangan_keterangan' => $this->input->post('undangan_keterangan'),
            'undangan_upload_dokumen' => $this->input->post('undangan_upload_dokumen'),
           
        );
        $dataundangan = $this->model->editdata3($data, $id);

        echo json_encode($dataundangan);
    }
    function editdata4(){
        $id=$this->input->post('jenisreg_id');
        $data=array(
            'jenisreg_jenis_surat' => $this->input->post('jenisreg_jenis_surat'),
        );
        $datajenisregister = $this->model->editdata4($data, $id);

        echo json_encode($datajenisregister);
    }
    function editdata5(){
        $id=$this->input->post('jenisundangan_id');
        $data=array(
            'jenisundangan_jenis_undangan' => $this->input->post('jenisundangan_jenis_undangan'),
        );
        $datajenisundangan = $this->model->editdata5($data, $id);

        echo json_encode($datajenisundangan);
    }

    // function editdata4(){
    //     $id=$this->input->post('jenisreg_id');
    //     $data=array(
    //         'jenisreg_jenissurat' => $this->input->post('jenisreg_jenissurat'),
    //     );
    //     $datajenisregister = $this->model->editdata3($data, $id);

    //     echo json_encode($datajenisregister);
    // }


    public function register_surat()
    {
        $data['content'] = 'reg_surat';
        $data['active'] = 'surat';
        $data['register_surat']=$this->model->get_jenisreg();
        $this->load->view('layouts/master', $data);
    }

    public function undangan_surat()
    {
        $data['content'] = 'und_surat';
        $data['active'] = 'undangan';
        $data['undangan_surat']=$this->model->get_jenisundangan();
        $this->load->view('layouts/master', $data);
    }

    public function tembusan_sekda()
    {
        $data['content'] = 'tem_sekda';
        $data['active'] = 'tembusan';
        $this->load->view('layouts/master', $data);
    }
    public function jenis_register()
    {
        $data['content']='jenis_register';
        $data['active']="jenis_register";
        $this->load->view('layouts/master',$data);
    }
    public function jenis_undangan()
    {
        $data['content']='jenis_undangan';
        $data['active']="jenis_undangan";
        $this->load->view('layouts/master',$data);
    }


    public function add_register_surat()
    {
        $data['content'] = 'add_reg_surat';
        $data['active'] = 'add_register';
        $data['cats'] = $this->model->get_jenisreg();
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
        $data['cats'] = $this->model->get_jenisundangan();
        $this->load->view('layouts/master', $data);
    }
    public function add_jenis_register()
    {
        $data['content']='add_jenis_register';
        $data['active']='add_jenisregister';
        $this->load->view('layouts/master',$data);
    }
    public function add_jenis_undangan()
    {
        $data['content']='add_jenis_undangan';
        $data['active']='add_jenisundangan';
        $this->load->view('layouts/master',$data);
    }
    function tambahRegister()
    {
        $data_register = array(
            // 'berita_user_id' => $this->session->userdata('user_id'),
            'register_tanggal_masuk' => $this->input->post('tambah_register_tanggal_masuk'),
            'register_asal_surat' => $this->input->post('tambah_register_asal_surat'),
            'register_no_surat' => $this->input->post('tambah_register_no_surat'),
            'register_tanggal_surat' => $this->input->post('tambah_register_tanggal_surat'),
            'register_jenis_surat' => $this->input->post('tambah_register_jenis_surat'),
            'register_perihal' => $this->input->post('tambah_register_perihal'),
            'register_kode' => $this->input->post('tambah_register_kode'),
            'register_keterangan' => $this->input->post('tambah_register_keterangan'),
            // 'register_upload_dokumen' => $this->input->post('tambah_register_upload')
        );
        $register_no_urut = $this->model->tambahRegister($data_register);
        $upload_path = "./assets/uploads/konten/register";
        if (is_dir($upload_path) == false) {
            $oldmask = umask(0);
            mkdir($upload_path, 0775);
            umask($oldmask);
        }
        if (!empty($_FILES['tambah_register_upload']['name'])) {
            $date = new DateTime();
            $timestamp =  $date->getTimestamp();
            $filename = $register_no_urut . '_' . $timestamp;
            $uploaded_filename = $this->doUpload($upload_path, 'tambah_register_upload', $filename);
            $data_dokumen_upload = array(
                'register_upload_dokumen' => $uploaded_filename,
            );        
            $this->model->editRegister($data_dokumen_upload, $register_no_urut);

        }
        redirect('/registrasi/register_surat');
    }
    private function doUpload($upload_path, $key, $file_name)
    {
        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = '*';
        $config['max_size']      = '0';
        $config['file_name']     = $file_name;
        $config['overwrite']     = 'TRUE';
        $this->load->library('upload', $config);
        $this->upload->do_upload($key);
        $upload_data = $this->upload->data();
        return $upload_data['file_name'];
    }
    function editRegister()
    {
        $register_no_urut = $this->input->post('edit_register_no_urut');
        $data_register= array(
            'register_tanggal_masuk' => $this->input->post('edit_register_tanggal_masuk'),
            'register_asal_surat' => $this->input->post('edit_register_asal_surat'),
            'register_no_surat' => $this->input->post('edit_register_no_surat'),
            'register_tanggal_surat' => $this->input->post('edit_register_tanggal_surat'),
            'register_jenis_surat' => $this->input->post('edit_register_jenis_surat'),
            'register_perihal' => $this->input->post('edit_register_perihal'),
            'register_kode' => $this->input->post('edit_register_kode'),
            'register_keterangan' => $this->input->post('edit_register_keterangan'),
            'register_upload' => $this->input->post('edit_register_upload')
        );
        $this->model->editRegister($data_register, $register_no_urut);
        $upload_path = "./assets/uploads/konten/register/";
        if (is_dir($upload_path) == false) {
            $oldmask = umask(0);
            mkdir($upload_path, 0775);
            umask($oldmask);
        }
        // if (!empty($_FILES['edit_register_upload']['name'])) {
        //     $date = new DateTime();
        //     $timestamp =  $date->getTimestamp();
        //     $filename = $berita_id . '_' . $timestamp;
        //     $uploaded_filename = $this->doUpload($upload_path, 'edit_register_upload', $filename);
        //     $data_dokumen_upload = array(
        //         'register_upload' => $uploaded_filename,
        //     );
        //     $this->model->editRegister($data_register, $register_no_urut);
        // }
        // redirect('/registrasi/register_surat');
    }
    function delRegistrasi($register_no_urut)
    {
        $deleted = array(
            'register_deleted' => '1',

        );
        $this->model->editRegister($deleted, $register_no_urut);
        echo json_encode('1');
    }
    function tambahTembusan()
    {
        $data_tembusan = array(
            // 'berita_user_id' => $this->session->userdata('user_id'),
            'tembusan_asal_surat' => $this->input->post('tambah_tembusan_asal_surat'),
            'tembusan_tanggal_surat' => $this->input->post('tambah_tembusan_tanggal_surat'),
            'tembusan_no_surat' => $this->input->post('tambah_tembusan_no_surat'),
            'tembusan_keterangan' => $this->input->post('tambah_tembusan_keterangan'),
        );
        $tembusan_no_urut = $this->model->tambahTembusan($data_tembusan);
        redirect('/registrasi/tembusan_sekda');
    }
    function tambahJenisRegister()
    {
        $data_jenisreg = array(
            // 'berita_user_id' => $this->session->userdata('user_id'),
            'jenisreg_jenis_surat' => $this->input->post('tambah_jenisreg_jenis_surat'),
        );
        $jenisreg_id = $this->model->tambahJenisRegister($data_jenisreg);
        redirect('/registrasi/jenis_register');
    }
    function tambahJenisUndangan()
    {
        $data_jenisund= array(
            // 'berita_user_id' => $this->session->userdata('user_id'),
            'jenisundangan_jenis_undangan' => $this->input->post('tambah_jenisundangan_jenis_undangan'),
        );
        $jenisundangan_id = $this->model->tambahJenisUndangan($data_jenisund);
        redirect('/registrasi/jenis_undangan');
    }
    function tambahUndangan()
    {
        $data_undangan=array(
            'undangan_dari' =>$this->input->post('tambah_undangan_dari'),
            'undangan_no_surat' => $this->input->post('tambah_undangan_no_surat'),
            'undangan_tanggal' =>$this->input->post('tambah_undangan_tanggal'),
            'undangan_jenis_undangan'=>$this->input->post('tambah_undangan_jenis_undangan'),
            'undangan_uraian'=>$this->input->post('tambah_undangan_uraian'),
            'undangan_keterangan'=>$this->input->post('tambah_undangan_keterangan'),
            // 'undangan_upload_dokumen' => $this->input->post('tambah_undangan_upload_dokumen'),
        );
        $undangan_no_urut=$this->model->tambahUndangan($data_undangan);
        $upload_path = "./assets/uploads/konten/undangan";
        if (is_dir($upload_path) == false) {
            $oldmask = umask(0);
            mkdir($upload_path, 0775);
            umask($oldmask);
        }
        if (!empty($_FILES['tambah_undangan_upload_dokumen']['name'])) {
            $date = new DateTime();
            $timestamp =  $date->getTimestamp();
            $filename = $undangan_no_urut . '_' . $timestamp;
            $uploaded_filename = $this->doUpload($upload_path, 'tambah_undangan_upload_dokumen', $filename);
            $data_dokumen_upload = array(
                'undangan_upload_dokumen' => $uploaded_filename,
            );        
            $this->model->editUndangan($data_dokumen_upload, $undangan_no_urut);
        }
        redirect('/registrasi/undangan_surat');
    }
    // function editUndangan()
    // {
    //     $undangan_no_urut = $this->input->post('edit_undangan_no_urut');
    //     $data_undangan= array(
    //             'undangan_dari' =>$this->input->post('edit_undangan_dari'),
    //             'undangan_no_surat' => $this->input->post('edit_undangan_no_surat'),
    //             'undangan_tanggal' =>$this->input->post('edit_undangan_tanggal'),
    //             'undangan_jenis_undangan'=>$this->input->post('edit_undangan_jenis_undangan'),
    //             'undangan_uraian'=>$this->input->post('edit_undangan_uraian'),
    //             'undangan_keterangan'=>$this->input->post('edit_undangan_keterangan'),
    //             'undangan_upload_dokumen' => $this->input->post('edit_undangan_upload_dokumen'),
    //         );
    //     $this->model->editUndangan($data_undangan, $undangan_no_urut);
    //     $upload_path = "./assets/uploads/konten/undangan/";
    //     if (is_dir($upload_path) == false) {
    //         $oldmask = umask(0);
    //         mkdir($upload_path, 0775);
    //         umask($oldmask);
    //         }
    //     if (!empty($_FILES['edit_undangan_upload_dokumen']['name'])) {
    //         $date = new DateTime();
    //         $timestamp =  $date->getTimestamp();
    //         $filename = $undangan_no_urut . '_' . $timestamp;
    //         $uploaded_filename = $this->doUpload1($upload_path, 'edit_undangan_upload_dokumen', $filename);
    //         $data_dokumen_upload = array(
    //             'undangan_upload_dokumen' => $uploaded_filename,
    //             );
    //             $this->model->editUndangan($data_undangan, $undangan_no_urut);
    //         }
    //         redirect('/registrasi/register_surat');
    //     }
        // redirect('/registrasi/register_surat');

    private function doUpload1($upload_path, $key, $file_name)
    {
        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = '*';
        $config['max_size']      = '0';
        $config['file_name']     = $file_name;
        $config['overwrite']     = 'TRUE';
        $this->load->library('upload', $config);
        $this->upload->do_upload1($key);
        $upload_data = $this->upload->data();
        return $upload_data['file_name'];
    }
}

