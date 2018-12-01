<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baca extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		$datane['artikel'] = $this->login_model->show_artikel2('artikel')->result(); 
		$this->load->view('home',$datane);
	}

	public function artikel($kode){
		$datane['side'] = $this->login_model->show_artikel2('artikel')->result(); 
		$datane['artikel'] = $this->login_model->baca_artikel($kode)->result(); 
		$this->load->view('v_baca_artikel',$datane);
	}

	public function kategori($kode){
		$datane['side'] = $this->login_model->show_artikel2('artikel')->result(); 
		$datane['artikel'] = $this->login_model->kategori($kode)->result(); 
		$this->load->view('v_baca_kategori',$datane);
	}
}
