<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->model('master_model', 'model');
    }

    function ambildata($table){
        return $this->db->get($table);
    }

    function hapusdata($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function editdata($data, $where){
        return $this->db->where('register_no_urut', $where)
            ->update('ref_register_surat', $data);
    }
    function ambildata1($table){
        return $this->db->get($table);
    }

    function hapusdata1($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function editdata1($data, $where){
        return $this->db->where('tembusan_no_urut', $where)
            ->update('ref_tembusan', $data);
    }

        // public function get_desa(){
    //     $q1 = $this->db->select('nama_kec, id_kec')->from('ref_kec')->get()->result();
    //     foreach($q1 as $key => $value){
    //       $q2 = $this->db->select('nama_desa, id_desa')
    //             ->from('ref_desa')
    //             ->where(array('id_kec'=>$value->id_kec))->get()->result();
    //       $q1[$key]->desa = $q2;
    //     }
    //     return $q1;
    // }

    // public function get_wilayah_by_desa($id_desa){
    //     return $this->db->select('nama_desa, nama_kec, nama_kotakab, nama_prov, ref_kec.id_kec, ref_kotakab.`id_kotakab`, ref_prov.`id_prov`')
    //        ->from('ref_desa')
    //        ->join('ref_kec', 'ref_kec.`id_kec` = ref_desa.`id_kec`')
    //        ->join('ref_kotakab', 'ref_kotakab.`id_kotakab` = ref_kec.`id_kotakab`')
    //        ->join('ref_prov', 'ref_prov.`id_prov` = ref_kotakab.`id_prov`')
    //        ->where(array('ref_desa.`id_desa`'=>$id_desa))
    //        ->get()->row();
    // }

    // public function get_register(){
    //     return $this->db->get('ref_register')->result();
    // }

    // public function get_tembusan(){
    //     return $this->db->get('ref_tembusan')->result();
    // }

    // public function get_undangan(){
    //     return $this->db->get('ref_undangan')->result();
    // }
    public function list_register_surat($id)
    {
        $this->db->select('*');
        // $this->db->where('pasien_lokasi_id', $id);
        $this->db->order_by('register_no_urut', 'desc');
        return $this->db->get('ref_pasien')->result();
    }

    public function tambahUndangan($data_undangan)
    {
        $this->db->insert('ref_undangan', $data_undangan);
        return $this->db->insert_id();
    }

    public function tambahRegister($data_register)
    {
        $this->db->insert('ref_register_surat', $data_register);
        return $this->db->insert_id();
    }
    
    public function tambahTembusan($data_tembusan)
    {
        $this->db->insert('ref_tembusan', $data_tembusan);
        return $this->db->insert_id();
    }

    public function editRegister($data_dokumen_upload, $register_no_urut)
    {
        $this->db->where('register_no_urut', $register_no_urut)
            ->update('ref_register_surat', $data_dokumen_upload);
    }
    public function editUndangan($data_dokumen_upload, $undangan_no_urut)
    {
        $this->db->where('undangan_no_urut', $undangan_no_urut)
            ->update('ref_undangan', $data_dokumen_upload);
    }
    public function get_jenisreg()
    {
        $query = $this->db->get('ref_jenisreg')->result();
        return $query;
    }
    
    public function get_jenisundangan()
    {
        $query=$this->db->get('ref_jenisundangan')->result();
        return $query;
    }
    // public function get_jenisreg()
    // {
    //     $query = $this->db->get('ref_jenisreg')->result();
    //     return $query;
    // }

//     public function get_jenis_lantai(){
//         return $this->db->get('ref_jenis_lantai')->result();
//     }

//     public function get_kondisi_lantai(){
//         return $this->db->get('ref_kondisi_lantai')->result();
//     }

//     public function get_kondisi_dinding(){
//         return $this->db->get('ref_kondisi_dinding')->result();
//     }

//     public function get_jenis_dinding(){
//         return $this->db->get('ref_jenis_dinding')->result();
//     }

//     public function get_jenis_atap(){
//         return $this->db->get('ref_jenis_atap')->result();
//     }

//     public function get_kondisi_atap(){
//         return $this->db->get('ref_kondisi_atap')->result();
//     }

//     public function get_sumber_air_minum(){
//         return $this->db->get('ref_sumber_air_minum')->result();
//     }

//     public function get_cara_peroleh_air(){
//         return $this->db->get('ref_cara_peroleh_air_minum')->result();
//     }

//     public function get_sumber_penerangan(){
//         return $this->db->get('ref_sumber_penerangan')->result();
//     }

//     public function get_daya_pln(){
//         return $this->db->get('ref_daya_listrik_pln')->result();
//     }

//     public function get_bahan_bakar(){
//         return $this->db->get('ref_bahan_bakar_memasak')->result();
//     }

//     public function get_fasilitas_bab(){
//         return $this->db->get('ref_fasilitas_bab')->result();
//     }

//     public function get_tempat_pembuangan_tinja(){
//         return $this->db->get('ref_tempat_pembuangan_tinja')->result();
//     }

//     public function get_tempat_limbah(){
//         return $this->db->get('ref_tempat_pembuangan_akhir_limbah')->result();
//     }

//     public function get_saluran_limbah(){
//         return $this->db->get('ref_saluran_pembuangan_limbah')->result();
//     }

//     public function get_keadaan_got(){
//         return $this->db->get('ref_keadaan_air_got')->result();
//     }

//     public function get_cara_penanganan_sampah(){
//         return $this->db->get('ref_cara_penanganan_sampah')->result();
//     }

//     public function get_suku_bangsa(){
//         return $this->db->get('ref_suku_bangsa')->result();
//     }

//     public function get_agama(){
//         return $this->db->get('ref_agama')->result();
//     }

//     public function get_golongan_darah(){
//         return $this->db->get('ref_golongan_darah')->result();
//     }

//     public function get_status_kawin(){
//         return $this->db->get('ref_status_kawin')->result();
//     }

//     public function get_kartu_identitas(){
//         return $this->db->get('ref_kartu_identitas')->result();
//     }

//     public function get_partisipasi_sekolah(){
//         return $this->db->get('ref_partisipasi_sekolah')->result();
//     }

//     public function get_pendidikan_tertinggi(){
//         return $this->db->get('ref_pendidikan_tertinggi')->result();
//     }

//     public function get_kelas_tertinggi(){
//         return $this->db->get('ref_kelas_tertinggi')->result();
//     }

//     public function get_ijazah_tertinggi(){
//         return $this->db->get('ref_ijazah_tertinggi')->result();
//     }

//     public function get_alasan_tidak_bekerja(){
//         return $this->db->get('ref_alasan_tidak_bekerja')->result();
//     }

//     public function get_status_pekerjaan_utama(){
//         return $this->db->get('ref_status_dalam_pekerjaan_utama')->result();
//     }

//     public function get_jenis_disabilitas(){
//         return $this->db->get('ref_jenis_disabilitas')->result();
//     }

//     public function get_tingkat_kesulitan_disabilitas(){
//         return $this->db->get('ref_tingkat_kesulitan_disabilitas')->result();
//     }

//     public function get_penyakit_kronis(){
//         return $this->db->get('ref_penyakit_kronis')->result();
//     }

//     public function get_kepemilikan_asuransi(){
//         return $this->db->get('ref_kepemilikan_asuransi_kesehatan')->result();
//     }

//     public function get_keikutsertaan_kb(){
//         return $this->db->get('ref_keikutsertaan_kb')->result();
//     }

//     public function get_metode_kontrasepsi(){
//         return $this->db->get('ref_metode_kontrasepsi')->result();
//     }

//     public function get_keinginan_memiliki_anak(){
//         return $this->db->get('ref_keinginan_memiliki_anak')->result();
//     }

//     public function get_tempat_pelayanan_kb(){
//         return $this->db->get('ref_tmpt_pelayanan_kb')->result();
//     }

//     public function get_alasan_tidak_kb(){
//         return $this->db->get('ref_alasan_tidak_kb')->result();
//     }
// 
}
