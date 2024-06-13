<?php
class M_log_peminjaman extends CI_Model {
    public function insert_data($data) {
        return $this->db->insert('log_peminjaman', $data);
    }
}
?>