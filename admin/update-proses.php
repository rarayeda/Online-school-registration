<?php
require "connect.php";
if (isset($_POST['update'])) {
$query = "UPDATE data_siswa SET status=? WHERE id_pendaftar=?";
$data = $connect->prepare($query);
$data->bindParam(1, $_POST['status']);
$data->bindParam(2, $_POST['id_pendaftar']);
$data->execute();


$berhasil = $data->execute();

	if($berhasil){
		header ("Location: pendaftaran.php");
	}else{
		echo "gagal diedit";
	}
}
?>
