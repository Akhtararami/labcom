<?php
class Peminjaman extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_peminjaman');
        $this->load->model('m_returned'); // Load model baru
    }

    public function index() {
        $peminjaman = $this->db->get_where('peminjaman', ['no_seri' => $this->session->userdata('no_seri')])->row_array();
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', [
            'required' => '%s harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Peminjaman',
                'page' => 'v_peminjaman',
            );
            $this->load->view('v_template', $data);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
                'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
                'nama_barang' => $this->input->post('nama_barang'),
                'jumlah' => $this->input->post('jumlah'),
                'no_seri' => $this->input->post('no_seri'),
                'keterangan' => $this->input->post('keterangan'),
            );
            if ($this->m_peminjaman->insert_data($data)) {
                if ($this->m_returned->insert_data($data)) {
                    $this->session->set_flashdata('massage', '<div class="alert" style="background: #6FEF52; margin-left:2rem; padding:10px; border-radius: 10px; width: 80%;">Data berhasil di tambahkan</div>');
                    redirect('peminjaman');

                } else {
                    redirect('peminjaman/index');  
                    $this->session->set_flashdata('message', '<div class="danger" style="background: #FF4848; padding:10px; border-radius: 10px; width: 80%;">Data gagal ditambahkan, silahkan ulangi atau beri tahu petugas!</div>');
                    //error
                }
            } else {
                redirect('peminjaman');
                $this->session->set_flashdata('message', '<div class="danger" style="background: #FF4848; padding:10px; border-radius: 10px; width: 80%;">Data gagal ditambahkan, silahkan ulangi atau beri tahu petugas!</div>');

            }
        }
    }
    public function returned() {
        $peminjaman = $this->db->get_where('peminjaman', ['nama' => $this->session->userdata('nama')])->row_array();
        $data = array(
            'judul' => 'Barang yang belum dikembalikan',
            'page' => 'admin/v_returnuser',
            'returned' => $this->m_returned->all_data(),
        );
        $this->load->view('v_template', $data, false);
    }
    public function hapus_data($id) {
        $data = array(
            'id' => $id
        );
        $this->m_returned->hapus_data($data);
        $this->session->set_flashdata('massage', '<div class="alert" style="background: #6FEF52; padding:10px; margin-left:2rem; border-radius: 10px; width: 80%;">Barang sudah dikembalikan, terimakasih!</div>');
        redirect('peminjaman/returned');
    }

    }

?>
