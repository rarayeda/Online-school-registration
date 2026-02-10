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

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="hovered">
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
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Pendaftar</h2>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama pendaftar</th>
                                <th>Jurusan</th>
                                <th>Jenis Kelamin</th>                                    
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>No. Telp</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
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
                                  <td>$t->jurusan</td>
                                  <td>$t->jenis_kelamin</td>
                                  <td>$t->tanggal_lahir</td>
                                  <td>$t->tempat_lahir</td>
                                  <td>$t->no_hp</td>
                                  <td>$t->email</td>
                                  <td>$t->status</td>
                                  <td>

                                      <a href='edit.php?id=$t->id_pendaftar'>Edit</a>
                                       <form action='hapus-data-proses.php' method='post' style='display: inline;'>
                                        <input type='hidden' name='id_pendaftar' value='$t->id_pendaftar'/>
                                        <input type='submit' name='hapus-data' value='Hapus' />
                                       </form>
                                       
                                  </td>
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
    </div>                           
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>