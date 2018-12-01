<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index(){
		$this->load->model('login_model');
		if($this->session->userdata('status') != "masukto")
		{
			$this->load->view('v_login');
		}
		else
		{
			//$data['judul']="Dahsboard";
			$this->load->view('dashboard');
		}

	}

	function page(){
		$data['judul']="Dahsboard";
		$this->load->view('dashboard');
	}

	function auth(){
		$this->load->model('login_model');
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		$cek_user=$this->login_model->auth_user($username,$password);

		if($cek_user->num_rows() > 0)
		{ 
			$data=$cek_user->row_array();
			$this->session->set_userdata('status',"masukto");
			$this->session->set_userdata('ses_nama',$data['username']);
			redirect('login/page');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}

}
