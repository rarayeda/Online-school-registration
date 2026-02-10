 <?php
require "connect.php";
$query = "SELECT * FROM data_siswa";
$data = $connect->prepare($query);
$data->execute();
$tampil = $data->fetchAll(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
       <div class="containers">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title">Admin ISFI</span>
                    </a>
                </li>

                <li class="hovered">
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="pendaftaran.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Pendaftar</span>
                    </a>
                </li>

                <li>
                    <a href="alamat.php">
                        <span class="icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </span>
                        <span class="title">Data Alamat Pendaftar</span>
                    </a>
                </li>

                <li>
                    <a href="askol.php">
                        <span class="icon">
                            <ion-icon name="school-outline"></ion-icon>
                        </span>
                        <span class="title">Data Asal Sekolah</span>
                    </a>
                </li>

                <li>
                    <a href="wali.php">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Data Wali</span>
                    </a>
                </li>
                 <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="exit-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>


               <div class="user">
                  <a href="../index.php">
                   <img src="img/logo.png" alt="">
                   </a>
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <a href="pendaftaran.php">
                    <div>  
                        <div class="cardName">
                            <?php
                            $connect = mysqli_connect('localhost', 'root', '', 'pendaftaran');

                            $data_siswa = mysqli_query($connect, "SELECT * FROM data_siswa");
                            $jumlah_data = mysqli_num_rows($data_siswa);
                            echo "$jumlah_data orang";
                            ?>
                        </div>
                        <div class="numbers">Pendaftar Masuk</div>
                    </div>
                    </a>
                </div>

                <div class="card">
                    <div>
                        
                        <div class="cardName">
                            <?php
                            $connect = mysqli_connect('localhost', 'root', '', 'pendaftaran');
                            $data_siswa = mysqli_query($connect, "SELECT * FROM data_siswa WHERE status='Lulus'");
                            $jumlah_data = mysqli_num_rows($data_siswa);
                            echo "$jumlah_data orang";
                            ?>
                            <div class="numbers">Lulus Seleksi</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
            <!-- ================ Order Details List ================= -->

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>