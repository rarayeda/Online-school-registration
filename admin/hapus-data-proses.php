<?php
require "connect.php";
if (isset($_POST['hapus-data'])) {
	echo $_POST['id_pendaftar'];

	$query = "DELETE FROM data_siswa WHERE id_pendaftar=?";
	$data = $connect->prepare($query);
	$data->bindParam(1, $_POST['id_pendaftar']);
	$berhasil = $data->execute();

	if ($berhasil){
		header("location:pendaftaran.php");
	}else{
		echo "gagal dihapus";
	}
 } 