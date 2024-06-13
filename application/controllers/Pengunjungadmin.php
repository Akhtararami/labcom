<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjungadmin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_pengunjung');
    }
    public function index(){
        $pengunjung = $this->db->get_where('pengunjung', ['nama'=>$this->session->userdata('nama')])->row_array();
        $data = array(
            'judul' => 'Data pengunjung',
            'page' => 'v_pengunjung',
            'pengunjung' => $this->m_pengunjung->all_data(),
        );
        $this ->load->view('admin/v_templateadmin', $data);
    }
    public function data_pengunjung(){
        $pengunjung = $this->db->get_where('pengunjung',['nama'=>$this->session->userdata('nama')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => '%field harus diisi.'
        ]);
        if ($this->form_validation->run()==FALSE) {
            $data = array(
                'judul' => 'data pengunjung',
                'page'=> 'v_datapengunjungadmin',
            );
            $this->load->view('admin/v_templateadmin', $data);          
        
        } else {
            $data = array (
                'nama' => $this->input->post('nama'),
                'tanggal' =>$this->input->post('tanggal'),
                'siswa_ion' =>$this->input->post('siswa_ion'),
                'email'=>$this->input->post('email'),
                'nomor'=>$this->input->post('nomor'),
                'no_loker'=>$this->input->post('no_loker'),
                'keperluan'=>$this->input->post('keperluan'),
                'keterangan'=>$this->input->post('keterangan'),
                'no_kuitansi'=>$this->input->post('no_kuitansi')
            );
            $this->m_pengunjung->insert_data($data);
            $this->session->set_flashdata('massage','<div class="alert" style="background: #6FEF52; margin-left:2rem; padding:10px; border-radius: 10px; width: 80%;">Data berhasil ditambahkan!</div>');
            redirect('pengunjungadmin/index');
        }
}
    public function edit($id){
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        
        if ($this->form_validation->run()== FALSE) {
            $data['pengunjung'] = $this->db->get_where('pengunjung', ['nama' => $this->session->userdata('nama')])->row_array();

            $data = array(
                'judul' => 'Edit Data Pengunjung',
                'pengunjung' => $this->m_pengunjung->detail_data($id),
                'page' => 'v_editpengunjung'
            );
            $this->load->view('admin/v_templateadmin', $data, false);
        }else{
            $data = array(
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'tanggal' =>$this->input->post('tanggal'),
                'siswa_ion' =>$this->input->post('siswa_ion'),
                'email'=>$this->input->post('email'),
                'nomor'=>$this->input->post('nomor'),
                'keperluan'=>$this->input->post('keperluan'),
                'no_loker'=>$this->input->post('no_loker'),
                'keterangan'=>$this->input->post('keterangan'),
                'no_kuitansi'=>$this->input->post('no_kuitansi')
            );
            $this->m_pengunjung->update_data($data);
            $this->session->set_flashdata('massage','<div class="alert" style="background: #6FEF52; margin-left:2rem; padding:10px; border-radius: 10px; width: 80%;">Data berhasil diedit!</div>');
            redirect('pengunjungadmin');

        }
    }
    public function delete($id){
        $data = array(
            'id' => $id
        );

        $this->m_pengunjung->delete_data($data);
        $this->session->set_flashdata('massage','<div class="alert" style="background: #F65858; margin-left:2rem; padding:10px; border-radius: 10px; width: 80%;">Data berhasil dihapus!</div>');
        redirect('pengunjungadmin/index');
    }
}
