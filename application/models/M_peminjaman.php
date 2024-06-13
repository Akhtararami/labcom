<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class M_peminjaman extends CI_Model{
    public function insert_data($data){
    if ($this->db->insert('peminjaman', $data)) {
        return true;
    } else {
        log_message('error', 'Error inserting data into peminjaman: ' . $this->db->last_query());
        return false;
    }
}
    public function all_data(){
        $this->db->select('*');
        $this->db->from('peminjaman');
        return $this->db->get()->result();
    }

    public function detail_data($id){
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function update_data($data){
        $this->db->where('id', $data['id']);
        $this->db->update('peminjaman', $data);
    }
    public function delete_data($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('peminjaman', $data);
    }
}
