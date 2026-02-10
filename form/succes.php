<?php

require "connection.php";

if (isset($_POST['kirim'])) {
$kode = $_POST['kode'];
$query = "SELECT * FROM data_siswa WHERE kode_pendaftaran=?";
$data = $connect->prepare($query);
$data->bindParam(1, $kode);


$data->execute();

$tampil = $data->fetch(PDO::FETCH_OBJ);

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-wid th, initial-scale=1">
	<title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
         img{
      filter: brightness(25%);
      position: relative;
      }

      .border{
        background: rgba(0,0,0,0.6);
      }

      .checkbox-wrapper-31:hover .check {
  stroke-dashoffset: 0;
}

.checkbox-wrapper-31 {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 40px;
}

.checkbox-wrapper-31 .background {
  fill: #ccc;
  transition: ease all 0.6s;
  -webkit-transition: ease all 0.6s;
}

.checkbox-wrapper-31 .stroke {
  fill: none;
  stroke: #fff;
  stroke-miterlimit: 10;
  stroke-width: 2px;
  stroke-dashoffset: 100;
  stroke-dasharray: 100;
  transition: ease all 0.6s;
  -webkit-transition: ease all 0.6s;
}

.checkbox-wrapper-31 .check {
  fill: none;
  stroke: #fff;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-width: 2px;
  stroke-dashoffset: 22;
  stroke-dasharray: 22;
  transition: ease all 0.6s;
  -webkit-transition: ease all 0.6s;
}

.checkbox-wrapper-31 input[type=checkbox] {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  margin: 0;
  opacity: 0;
  -appearance: none;
  -webkit-appearance: none;
}

.checkbox-wrapper-31 input[type=checkbox]:hover {
  cursor: pointer;
}

.checkbox-wrapper-31 input[type=checkbox]:checked + svg .background {
  fill: #6cbe45;
}

.checkbox-wrapper-31 input[type=checkbox]:checked + svg .stroke {
  stroke-dashoffset: 0;
}

.checkbox-wrapper-31 input[type=checkbox]:checked + svg .check {
  stroke-dashoffset: 0;
}

    </style>
</head>
<body>
<div class="carousel-item active">
    <img class="img-fluid w-100 overflow-hidden"
     src="../assets/img/in.jpeg"
     class="w-100" alt="...">
 <div class="carousel-caption d-block">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="border p-4 text-center">
       <div class="checkbox-wrapper-31">
  <input checked="" type="checkbox">
  <svg viewBox="0 0 35.6 35.6">
    <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
    <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
    <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
  </svg>
</div>
    <h3>Pendaftaran telah selesai!</h3>
    <p>Anda telah berhasil mendaftar, dengan nomor pendaftaran</p>
        <?php
         echo "<h1><br>".$_GET['kode']. "</h1><br>";             		
        ?>
        <p>Simpan & jangan sampai hilang!</p>
        <p>Kode pendaftaran ini berguna ketika anda melakukan verifikasi data & pembayaran uang pendaftaran</p>
        <a href="cetak.php?kode=<?=$_GET['kode']?>">Cetak</a><br>
        <a href="../index.php" class="btn btn-primary mr-1 ml-1 mb-1 waves-effect waves-light">Kembali ke Home</a>
        
    </div>
    </div>
 </div>
</div>


</html>
                          


