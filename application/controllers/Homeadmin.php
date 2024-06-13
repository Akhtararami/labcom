<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin extends CI_Controller {
    public function admin(){
        $data = array(
            'judul' => 'Dashboard admin',
            'page' => 'admin/v_dashboardadmin',
            
        );

        
        $this->load->model('m_returned');
        $total_pinjam = $this->m_returned->count_all_users();
        $this->load->model('m_inventaris');
        $total_inventaris = $this->m_inventaris->count_all_users();
        $this->load->model('m_pengunjung');
        $total_pengunjung = $this->m_pengunjung->count_all_users();
    
        
        $data['total_pinjam'] = $total_pinjam;
        $data['total_inventaris'] = $total_inventaris;
        $data['total_pengunjung'] = $total_pengunjung;

        $this->load->view('admin/v_templateadmin', $data);
    }
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');    
        $this->session->set_flashdata('massage', '<div class="alert" style="background:#69FF69; padding: 10px; margin-top: 10px; border-radius: 10px; width:90%; margin-left: 6rem;" role="alert">Berhasil Logout</div>');
        redirect('home/index');
    }
}