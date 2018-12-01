<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		$datane['artikel'] = $this->login_model->show_artikel2('artikel')->result(); 
		$this->load->view('home.html',$datane);
	}
}
