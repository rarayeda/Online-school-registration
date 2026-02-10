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
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

                <li>
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

                <li class="hovered">
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
         <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Alamat Sekolah</h2>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th> 
                                <th>Nama Pendaftar</th> 
                                <th>Nama Asal Sekolah</th>
                                <th>Alamat Asal Sekolah</th> 
                            </tr>                                   
                        </thead>
                        <tbody>
                             <?php
                                $no = 1;
                                foreach ($tampil as $t){
                                    echo "
                                  <tr>
                                  <td>$no</td>
                                  <td>$t->nama_pendaftar</td>
                                  <td>$t->nama_asal_sekolah</td>
                                  <td>$t->alamat_sekolah</td>
                                  </tr>

                                    ";
                                    $no++;
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </div>


    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>