<?php

defined("BASEPATH") OR exit ("No direct script access allowed");

class M_inventaris extends CI_Model {
    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('inventaris');
        return $this->db->get()->result();
    }
    public function insert_data($data){
        $this->db->insert('inventaris', $data);
    }
    public function detail_data($id){
        $this->db->select('*');
        $this->db->from('inventaris');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function update_data($data){
        $this->db->where('id', $data['id']);
        $this->db->update('inventaris', $data);
    }
    public function delete_data($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('inventaris', $data);
    }
    public function count_all_users(){
        return $this->db->count_all('inventaris');
    }
}
