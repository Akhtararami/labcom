<?php

class Inventarisadmin extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $this->load->model('m_inventaris');
    }
    public function index(){
        $inventaris = $this->db->get_where('inventaris', ['no_seri' => $this->session->userdata('no_seri')])->row_array();
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', [
            'required' => 'Fiels %s harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Inventaris',
                'page' => 'v_inventaris',
            );

            $this->load->view('admin/v_templateadmin', $data, false);
        }else {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'jumlah' => $this->input->post('jumlah'),
            'no_seri' => $this->input->post('no_seri'),
            'status' => $this->input->post('status'),
        );

        // Sanitize your data before insertion
        $this->session->set_flashdata('massage', '<div class="alert" style="background:#69FF69; padding: 10px; margin-top: 10px; border-radius: 10px; width:90%; margin-left: 2rem;" role="alert">Berhasil, data barang berhasil ditambahkan!!</div>');
        $this->m_inventaris->insert_data($data);
        redirect('inventarisadmin/data_inventaris'); 
    
    }
}

public function data_inventaris(){
    $data['inventaris'] = $this->db->get_where('inventaris', ['no_seri' => $this->session->userdata('no_seri')])->row_array();
    $data = array(
        'judul'=>'Data Inventaris',
        'page'=>'v_datainventaris',
        'inventaris' => $this->m_inventaris->all_data(),
    );
    $this->load->view('admin/v_templateadmin', $data);
}

public function edit($id){
    $this->form_validation->set_rules('nama_barang','Semua','required',[
        'required => %Harus diisi'
    ]);
    if($this->form_validation->run()== FALSE){
    $data['inventaris'] = $this->db->get_where('inventaris', ['no_seri' => $this->session->userdata('no_seri')])->row_array();

    $data = array(
        'judul'=>'Edit data inventaris',
        'inventaris' => $this->m_inventaris->detail_data($id),
        'page'=>'v_editinventaris',
    ); 
    $this->load->view('admin/v_templateadmin', $data, false);
} else {
    $data = array(
        'id' => $id,
        'nama_barang' => $this->input->post('nama_barang'),
        'no_seri' => $this->input->post('no_seri'),
        'jumlah' => $this->input->post('jumlah'),
        'status' => $this->input->post('status'),
    );
    $this->m_inventaris->update_data($data);
    $this ->session -> set_flashdata('massage','<div class="alert" style="background: #6FEF52; margin-left: 2rem; padding:10px; border-radius: 10px; width: 80%;">Data berhasil diedit!</div>');
    redirect('inventarisadmin/data_inventaris'); 
    
}

}
    public function delete($id){
        $data = array(
            'id' => $id
        );
        $this->m_inventaris->delete_data($data);
        $this->session->set_flashdata('massage','<div class="alert" style="background: #F65858; margin-left: 2rem; padding:10px; border-radius: 10px; width: 80%;">Data berhasil dihapus!</div>');
        redirect('inventarisadmin/data_inventaris');
    }

}
