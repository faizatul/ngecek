<?php
	foreach ($artikel as $key) {
		if($key->kategori==1){$kategori="Love";}elseif ($key->kategori==2) {
			$kategori="Children";
		}else{$kategori="Parents";}
		echo $key->id_artikel.'<br>';
		echo $key->judul_artikel.'<br>';
		echo $kategori.'<br>';
		echo $key->isi.'<br>';
		echo date('d-m-Y', strtotime($key->tgl_input));
	}
?>