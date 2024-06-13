<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_pengunjung');
    }
    public function index(){
        $pengunjung = $this->db->get_where('pengunjung', ['nama'=>$this->session->userdata('nama')])->row_array();
        $data = array(
            'judul' => 'Halo',
            'page' => 'v_pengunjung',
            'pengunjung' => $this->m_pengunjung->all_data(),
        );
        $this ->load->view('v_template', $data);
    }
    public function data_pengunjung(){
        $pengunjung = $this->db->get_where('pengunjung',['nama'=>$this->session->userdata('nama')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => '%field harus diisi.'
        ]);
        if ($this->form_validation->run()==FALSE) {
            $data = array(
                'judul' => 'data pengunjung',
                'page'=> 'v_datapengunjung',
            );
            $this -> load->view('v_template', $data);          
        
        } else {
            $data = array (
                'nama' => $this->input->post('nama'),
                'tanggal' =>$this->input->post('tanggal'),
                'siswa_ion' =>$this->input->post('siswa_ion'),
                'email'=>$this->input->post('email'),
                'nomor'=>$this->input->post('nomor'),
                'keperluan'=>$this->input->post('keperluan'),
                'no_loker'=>$this->input->post('no_loker'),
                'no_kuitansi' => $this->input->post('no_kuitansi'),
                'keterangan' => $this->input->post('keterangan'),
            );

            $this->session->set_flashdata('massage', '<div class="alert" style="background:#69FF69; padding: 10px; margin-top: 10px; border-radius: 10px; width:90%; margin-left: 2rem;" role="alert">Berhasil, silahkan masuk labkom dan jangan merusak apapun!</div>');
            $this->m_pengunjung->insert_data($data);
            redirect('pengunjung/data_pengunjung');
        }
}
}
