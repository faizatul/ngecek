<?php
class Login_model extends CI_Model{
	    //model untuk cek username, password, dan level
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	function add_artikel($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function show_artikel($tabel){
		$query=$this->db->query("SELECT * FROM $tabel ORDER BY id_artikel DESC");
		return $query;
	}

	function show_artikel2($tabel){
		$query=$this->db->query("SELECT * FROM $tabel ORDER BY id_artikel DESC LIMIT 3");
		return $query;
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	
	function edit_data($where,$table){      
		return $this->db->get_where($table,$where);
	}


	public function update_artikel($data, $where)
	{
		$this->db->where($where);
		$this->db->update('artikel', $data);
		return TRUE;
	}

	public function baca_artikel($kode){
		$query=$this->db->query("SELECT * FROM artikel where id_artikel='$kode'");
		return $query;
	}

	public function kategori($kode){
		$query=$this->db->query("SELECT * FROM artikel where kategori='$kode'");
		return $query;
	}
}