<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class M_returned extends CI_Model{

    public function insert_data($data){
        if ($this->db->insert('returned', $data)) {
            return true;
        } else {
            log_message('error', 'Error inserting data into peminjaman: ' . $this->db->last_query());
            return false;
        }
    }
    
        public function all_data(){
            $this->db->select('*');
            $this->db->from('returned');
            return $this->db->get()->result();
        }
        public function hapus_data($data){
            $this->db->where('id', $data['id']);
            $this->db->delete('returned', $data);
        }
        
        public function count_all_users(){
            return $this->db->count_all('returned');
        }
}   