<?php

require "connection.php";

if (isset($_POST['kirim'])) {
    //ambil inputan dari hal login
    $kode = $_POST['kode'];
    $query = "SELECT * FROM data_siswa WHERE kode_pendaftaran=?";
    $data = $connect->prepare($query);
    $data->bindParam(1, $kode);


    $data->execute();
    $tampil = $data->fetch(PDO::FETCH_OBJ);

    //password verify digunakan untuk mencocokan pass yang sudah ter HASH pada database

    if ($tampil) {
        //panggil session untuk menjalankan session
        header("location: prosesberhasil.php?kode=$kode");
    }else{
        echo "<script>
        alert ('Kode Yang Anda Cari Belum Terdaftar');
        window.location= 'cekstatus.php';
        </script>";
    }
    }
?>

