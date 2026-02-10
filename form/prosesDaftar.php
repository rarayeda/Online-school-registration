<?php
require "connection.php";

if (isset($_POST['kirim'])) {

	$kode = "";
	if ($_POST['jurusan'] == "Rekayasa Perangkat Lunak") {
		$kode = "R-".date("Ymd")."".rand(10,99);
	} elseif ($_POST['jurusan'] == "Farmasi Klinis dan Komunitas") {
		$kode = "F-".date("Ymd")."".rand(10,99);
	} elseif ($_POST['jurusan'] == "Multimedia") {
		$kode = "M-".date("Ymd")."".rand(10,99);
	} elseif ($_POST['jurusan'] == "Tata Kecantikan Kulit dan Rambut") {
		$kode = "K-".date("Ymd")."".rand(10,99);
	}


	$query = "INSERT INTO data_siswa(kode_pendaftaran, jurusan, nama_pendaftar, jenis_kelamin, tempat_lahir, tanggal_lahir, no_hp, email, provinsi, kab_kota, kecamatan, desa_kel, alamat, kode_pos, nama_asal_sekolah, alamat_sekolah, wali, nama_wali, pekerjaan_wali, no_hp_wali, alamat_wali) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$data = $connect->prepare($query);
	$data->bindParam(1, $kode);
	$data->bindParam(2, $_POST['jurusan']);
	$data->bindParam(3, $_POST['nama']);
	$data->bindParam(4, $_POST['jk']);
	$data->bindParam(5, $_POST['tempatlahir']);
	$data->bindParam(6, $_POST['tanggallahir']);
	$data->bindParam(7, $_POST['hp']);
	$data->bindParam(8, $_POST['email']);
	$data->bindParam(9, $_POST['provinsi']);
	$data->bindParam(10, $_POST['kota']);
	$data->bindParam(11, $_POST['kecamatan']);
	$data->bindParam(12, $_POST['desa']);
	$data->bindParam(13, $_POST['alamat']);
	$data->bindParam(14, $_POST['kodepos']);
	$data->bindParam(15, $_POST['asalsekolah']);
	$data->bindParam(16, $_POST['alamatsekolah']);
	$data->bindParam(17, $_POST['status']);
	$data->bindParam(18, $_POST['namaorangtua']);
	$data->bindParam(19, $_POST['pekerjaanorangtua']);
	$data->bindParam(20, $_POST['hporangtua']);
	$data->bindParam(21, $_POST['alamatorangtua']);
	


	$berhasil = $data->execute();

	try {
	  header("location: succes.php?kode=$kode");
	} catch(Exception $e) {
	  echo $e->getMessage();
	}

}
?>