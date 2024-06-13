<?php

class inventaris extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_inventaris');
    }
    public function index(){
        $inventaris = $this->db->get_where('inventaris', ['no_seri' => $this->session->userdata('no_seri')])->row_array(); 
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', [
            'required' => 'Field %s harus diisi.'
        ]);
    
        if($this->form_validation->run() == FALSE){
            $data = array(
                'judul' => 'Inventaris',
                'page' => 'v_inventaris',
                // Add other data here...
            );
    
            $this->load->view('v_template', $data, false);
        } else {
            $data = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'jumlah' => $this->input->post('jumlah'),
                'no_seri' => $this->input->post('no_seri'),
                'status' => $this->input->post('status'),
            );
    
            // Sanitize your data before insertion
            $this->session->set_flashdata('massage', '<div class="alert" style="background:#69FF69; padding: 10px; margin-top: 10px; border-radius: 10px; width:90%; margin-left: 6rem;" role="alert">Berhasil Logout</div>');
            
            $this->m_inventaris->insert_data($data);
            redirect(base_url('inventaris/data_inventaris'));
        }
    }

    
    public function data_inventaris(){
        $data['inventaris'] = $this->db->get_where('inventaris', ['no_seri' => $this->session->userdata('no_seri')])->row_array();
        $data = array(
            'judul'=>'Data Inventaris',
            'page'=>'v_datainventarisuser',
            'inventaris' => $this->m_inventaris->all_data(),
        );
        $this->load->view('v_template', $data);
    }
}
