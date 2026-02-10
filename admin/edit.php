 <?php
require "connect.php";
$query = "SELECT * FROM data_siswa WHERE id_pendaftar=?";
$data = $connect->prepare($query);
$data->bindParam(1, $_GET['id']);
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
    <style type="text/css">
   body {
         font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      }

      img{
         position: absolute;
         z-index: -1;
         overflow-clip-margin: content-box;
         overflow: clip;
         filter: brightness(1.0);
      }
      
      /* Table */
      table {
         margin: auto;
         font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
         font-size: 12px;

      }
      .demo-table {
         border-collapse: collapse;
         font-size: 13px;
      }
      .demo-table th, 
      .demo-table td {
         border-bottom: 1px solid #e1edff;
         border-left: 1px solid #e1edff;
         padding: 7px 17px;
      }
      .demo-table th, 
      .demo-table td:last-child {
         border-right: 1px solid #e1edff;
      }
      .demo-table td:first-child {
         border-top: 1px solid #e1edff;
      }
      .demo-table td:last-child{
         border-bottom: 0;
      }
      h1 caption {
         caption-side: top;
         margin-bottom: 10px;
         padding-left: 120px;

      }
      
      /* Table Header */
      .demo-table thead th {
         background-color: #395B64;
         color: #FFFFFF;
         border-color: #6ea1cc !important;
         text-transform: uppercase;
      }
      
      /* Table Body */
      .demo-table thead td {
         color: white;
         background-color: gray;
      }
      
      .demo-table tbody tr:nth-child(odd) td {
         background-color: #A9A9A9;
      }
      .demo-table thead tr:hover th,
      .demo-table thead tr:hover td {
         background-color: darkslategray;
         border-color: #ffff0f;
         transition: all .2s;
      }
}

</style>
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
                        <h2>Edit Status Pendaftar</h2>
                    </div>
                   <table class="demo-table responsive">
                        <thead>
                            <?php
                                $no = 1;
                                foreach ($tampil as $t){
                                    echo "
                             <tr>
                                <th width='300px'>Nama Pendaftar</th>
                                <td width='700px'>$t->nama_pendaftar</td>
                              </tr>
                              <tr>
                                 <th>Jurusan</th>
                                <td>$t->jurusan</td>
                              </tr>
                              <tr>
                                 <th>Jenis Kelamin</th>
                                <td>$t->jenis_kelamin</td>
                              </tr>
                              <tr>
                                 <th>Tempat Lahir</th>
                                <td>$t->tempat_lahir</td>
                              </tr>
                              <tr>
                                 <th>Tanggal Lahir</th>
                                <td>$t->tanggal_lahir</td>
                              </tr>
                              <tr>
                                 <th>No. HP</th>
                                <td>$t->no_hp</td>
                              </tr>
                              <tr>
                                 <th>Email</th>
                                <td>$t->email</td>
                              </tr>
                              <tr>
                                 <th>Provinsi</th>
                                <td>$t->provinsi</td>
                              </tr>
                              <tr>
                                 <th>Kota/Kabupaten</th>
                                <td>$t->kab_kota</td>
                              </tr>
                              <tr>
                                 <th>Kecamatan</th>
                                <td>$t->kecamatan</td>
                              </tr>
                              <tr>
                                 <th>Desa/Kelurahan</th>
                                <td>$t->desa_kel</td>
                              </tr>
                              <tr>
                                 <th>Alamat</th>
                                <td>$t->alamat</td>
                              </tr>
                              <tr>
                                 <th>Kode Pos</th>
                                <td>$t->kode_pos</td>
                              </tr>
                              <tr>
                                 <th>Nama Asal Sekolah</th>
                                <td>$t->nama_asal_sekolah</td>
                              </tr>
                              <tr>
                                 <th>Alamat Sekolah</th>
                                <td>$t->alamat_sekolah</td>
                              </tr>
                               <tr>
                                 <th>Wali</th>
                                <td>$t->wali</td>
                              </tr>
                              <tr>
                                 <th>Nama Wali</th>
                                <td>$t->nama_wali</td>
                              </tr>
                              <tr>
                                 <th>Pekerjaan Wali</th>
                                <td>$t->pekerjaan_wali</td>
                              </tr>
                              <tr>
                                 <th>No. HP Wali</th>
                                <td>$t->no_hp_wali</td>
                              </tr>
                              <tr>
                                 <th>Alamat Wali</th>
                                <td>$t->alamat_wali</td>
                              </tr>
                              <tr>
                                <th>Nama Wali</th>
                                <td>$t->nama_wali</td>
                              </tr>
                              <tr> 
                                <th>Pekerjaan Wali</th>
                                <td>$t->pekerjaan_wali</td>
                              </tr>
                              <tr>
                                <th>No.Telp Wali</th> 
                                <td>$t->no_hp_wali</td> 
                              </tr>
                              <tr>                                  
                                <th>Alamat Wali</th> 
                                <td>$t->alamat_wali</td> 
                             </tr>
                              <tr>                                  
                                <th>status</th> 
                                <td>$t->status</td> 
                             </tr>  
                            ";
                            ?> 
                             <tr height='80'>
                                <th>Edit status</th>
                                <td>
                                 <form action='update-proses.php' method='POST'>
                                    <input type='hidden' name='id_pendaftar' value='<?=$t->id_pendaftar?>'>
                                    <select name='status' style="font-size: 20px; border-radius: 5px">
                                       <option value='Lulus'>Lulus</option>
                                       <option value='Tidak Lulus'>Tidak Lulus</option>
                                    </select>
                                    <input type='submit' name='update' value='update' style="font-size: 15px; background-color: blue; color: white; border-radius: 10px;">
                                </form>
                                </td>
                             </tr>                             
                            
                                    <?php
                                    $no++;
                                }
                                ?>
                        </thead>
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