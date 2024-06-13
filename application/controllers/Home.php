<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $data = array(
            'judul' => 'Selamat datang',
            'page' => 'v_dashboard',
        );
        $this->load->view('v_template', $data);
    }
}   