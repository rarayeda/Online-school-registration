<?php

require "connection.php";

$kode = $_GET['kode'];
$query = "SELECT * FROM data_siswa WHERE kode_pendaftaran=?";
$data = $connect->prepare($query);
$data->bindParam(1, $kode);


$data->execute();

$tampil = $data->fetch(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Status Anda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
         img{
      filter: brightness(25%);
      position: relative;
      }

      .border{
        background: rgba(0,0,0,0.8);
      }
    </style>
</head>
<body>
<div class="carousel-inner">
<div class="carousel-item active">
    <img class="img-fluid w-100 overflow-hidden"
        src="../assets/img/foto.jpeg"
        class="w-100" alt="...">
<div class="carousel-caption d-block">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="border p-4 text-center">
    <?php

        echo "<h3>Hai $tampil->nama_pendaftar !!</h3> <p>Nomor Pendaftaran anda: $tampil->kode_pendaftaran</p><p>jurusan yang anda pilih <h5>$tampil->jurusan</h5></p> <p>Status verifikasi data anda <h3> $tampil->status</h3>";    

        ?>
    <p>Silahkan Datang ke SMK ISFI Banjarmasin untuk Proses Selanjutnya</p>
     <a href="../index.php" class="btn btn-primary mr-1 ml-1 mb-1 waves-effect waves-light">Kembali ke Home</a>
    </div>
    </div>
</div>
</div>
</div>
</body>
</html>