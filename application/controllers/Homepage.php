<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('AuthModel');
	}
	public function index()
	{
		if(isset($_POST['login'])){
			$username = htmlspecialchars($this->input->post('username'));
			$password = htmlspecialchars($this->input->post('password'));

			$cekdata = $this->AuthModel->login($username);

			if ($cekdata) {
				if(password_verify($password, $cekdata->password)){
					$_SESSION['id_user'] = $cekdata->id;
					$_SESSION['role'] = $cekdata->role;
					$_SESSION['logged_in'] = true;

                    redirect($_SESSION['role']);
				}else {
					$this->session->set_flashdata('massage', '<div class="alert" style="background:#F65858; padding: 10px; margin-top: 10px; border-radius: 10px;" role="alert">Password salah</div>');
                    redirect('homepage/index');
					exit;
				}
			}else{
				$this->session->set_flashdata('massage', '<div class="alert" style="background:#F65858; padding: 10px; margin-top: 10px; border-radius: 10px;" role="alert">Username tidak ditemukan</div>');
				redirect('homepage/index');
				exit;
            }
		}

		$this->load->view('pages/homepage');
	}
}
