<?php
class Proses extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		if($this->session->userdata('status') != "masukto")
		{
			redirect('login');
		}

	}

	function hapus_artikel($kode)
	{
		$where = array('id_artikel' => $kode);
		$cek=$this->login_model->hapus_data($where,'artikel');
		$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data Berhasil dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');


		redirect('proses/tampil_artikel');
		
	}

	function tambah_artikel(){
		$config['upload_path'] = './assets/img/blog/';
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '2048';   
		$config['remove_space'] = TRUE;  
		$this->load->library('upload', $config);
		$this->upload->do_upload('input_gambar');
		$gambar = $this->upload->data();
		$tgl_input=date('Y-m-d');
		$data=array(
			'judul_artikel'=>$this->input->post('judul'),
			'kategori'=>$this->input->post('kategori'),
			'isi'=>$this->input->post('isi'),
			'tgl_input'=>$tgl_input,
			'gambar'=>$gambar['file_name']
		);
		$this->login_model->add_artikel($data,'artikel');
		redirect('login/page');
	}

	function tampil_artikel2(){
		$datane['artikel'] = $this->login_model->show_artikel('artikel')->result(); 
		$this->load->view('tampil',$datane);
	}

	function tampil_artikel(){
		$data['judul']="List Artikel | Robita Sembiring";
		$this->load->view('menu',$data);
		$datane['artikel'] = $this->login_model->show_artikel('artikel')->result(); 
		$this->load->view('v_tampil_artikel',$datane);
	}

	function artikel(){
		$data['judul']="Tambah Artikel | Robita Sembiring";
		$this->load->view('menu',$data);
		$this->load->view('v_tambah_artikel');
		//$this->load->view('v_footer');
	}

	function edit_artikel($kode){
		$data['judul']="Tambah Artikel | Robita Sembiring";
		$this->load->view('menu',$data);
		$where = array('id_artikel' => $kode);
		$datane['data'] = $this->login_model->edit_data($where,'artikel')->result();
		$this->load->view('v_edit_artikel',$datane);
	}

	function update_artikel(){
		$this->load->library('upload');
		$judul = $this->input->post('judul');
        $kategori = $this->input->post('kategori');//sesuaikan nama fiednya denagn inputan ok
        $isi = $this->input->post('isi');
        $path = './assets/img/blog/';
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '2048';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $nama_file = "gambar_".time();
        $config['file_name'] = $nama_file;
        $this->upload->initialize($config);

        $id = $this->input->post('id');
        $gambar_lama = $this->input->post('ganti_gambar');
        if ($_FILES['gambar']['name']) 
        {

        	$field_name = "gambar";
        	if ($this->upload->do_upload($field_name)) 
        	{
        		$gambar = $this->upload->data();
        		$usaha = 
        		(['judul_artikel'=>$judul,
        			'kategori'=>$kategori,
        			'isi'=>$isi,
        			'gambar'=>$gambar['file_name']]
        		);
        		$data = array_merge($usaha);

        		@unlink($path.$gambar_lama);
        		$where = array('id_artikel'=>$id);
        		if ($this->login_model->update_artikel($data, $where) == TRUE) 
        		{
        			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Anda Berhasil Merubah profil Perusahan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        			redirect('proses/tampil_artikel');
        		}
        		else
        		{
        			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ubah user <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        			redirect('proses/tampil_artikel');
        		}
        	}
        	else
        	{
        		$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ubah user <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        		redirect('proses/tampil_artikel');
        	}
        }
        else{
        	$data = array(
        		'judul_artikel'      => $this->input->post('judul'),
        		'kategori'    => $this->input->post('kategori'),
        		'isi' => $this->input->post('isi')
        	);
        	$where = array('id_artikel'=>$id);
        	if ($this->login_model->update_artikel($data, $where) == TRUE) 
        	{
        		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Anda Berhasil Merubah profil Perusahan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        		redirect('proses/tampil_artikel');
        	}
        	else
        	{
        		$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ubah user <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        		redirect('proses/tampil_artikel');
        	}
        }
    }
}	