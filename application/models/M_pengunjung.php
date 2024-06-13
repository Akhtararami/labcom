<?php

defined ("BASEPATH") OR exit("No direct script access allowed");

class M_pengunjung extends CI_Model {
    public function all_data(){
        $this->db->select('*');
        $this->db->from('pengunjung');
        return $this->db->get()->result();
    }
    public function insert_data($data){
        $this->db->insert('pengunjung', $data);
    }
    public function detail_data($id){
        $this->db->where('id', $id);
        $this->db->from('pengunjung');
        $this->db->select('*');
        return $this->db->get()->row();
    }
    public function update_data($data){
        $this->db->where('id', $data['id']);
        $this->db->update('pengunjung', $data);
    }
    public function delete_data($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('pengunjung', $data);
    }
    public function count_all_users(){
        return $this->db->count_all('pengunjung');
    }
}