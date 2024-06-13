<?php

class AuthModel extends CI_Model{

    public function login($username){
        $this->db->select(array('*'));
        return $this->db->get_where('user', array('username' => $username))->row();
    }

    public function getLoggedIn($id_user){
        $this->db->select('*');
        $this->db->where('id', $id_user);
        $this->db->from('user');

        return $this->db->get()->row();

    }
}