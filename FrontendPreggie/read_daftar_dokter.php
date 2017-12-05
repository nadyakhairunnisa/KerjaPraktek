<?php
  include("process/check_login.php");
  include("connect/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PREGGIE</title>
    <link rel="icon" type="image/png" href="images/logo.png">      

    <!-- Bootstrap -->    
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- StyleSheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--   Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background:#fafafa;">
    <!-- Navbar Section -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="admin_home.php"></a>
        </div>
         <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
         </ul>
      </div>
    </nav>
    <!-- Navbar end -->

    <div class="col-md-12 profil_pasien">
        <h1>~ Daftar Dokter ~</h1>
    </div>

    <div class="container-fluid">
    <div class="col-md-12 col-md-offset-2 text-center" id="perkembangan-admin">    
    
    <!-- Kolom search start -->
        <form class="navbar-form navbar-right" role="search" >
        <div class="input-group-vertical space" style="margin-bottom: 10px; ">
            <input type="text" class="form-control"  style="width:200px" placeholder="Pencarian">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search" ></i></button>
        </div>
        <div class="input-group-vertical text-right" >
           	<a class="btn btn-default" href="create_dokter.php" style="width:200px"><span class="glyphicon glyphicon-plus"></span>Tambah Dokter</a></div>
        </form>
     <!-- Kolom search end -->

        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Nama Dokter</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <!-- <tr> -->
                    <?php
                        $result = mysqli_query($conn, "SELECT id, nama FROM bidan");
                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $nama = $row['nama'];
                            
                            echo "<tr>";
                            echo "<td>$nama</td>";
                            echo "<td>
                            <div class='dpasien dokter'>
                            <a class='btn btn-sm' href='read_profil_dokter.php?id=$id'>Lihat Profil</a>
                            </div></td>";
                            echo "</tr>";
                        }
                    ?>
                <!-- </tr> -->
                <!-- <tr>
                    <td>dr.Agus Sp. OG</td>
                    <td>
                    	<div class="dpasien dokter">
                    	<a class="btn btn-sm" href="read_profil_dokter.html">Lihat Profil</a>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td>dr.Nurul Fatikah M Sp. OG</td>
                    <td>
                        <div class="dpasien dokter">
                        <a class="btn btn-sm" href="read_profil_dokter.html">Lihat Profil</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>dr.Nadya Khairunnisa Sp. OG</td>
                    <td>
                        <div class="dpasien dokter">
                        <a class="btn btn-sm" href="read_profil_dokter.html">Lihat Profil</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>dr.Jecky Fernando Sp. OG</td>
                    <td>
                        <div class="dpasien dokter">
                        <a class="btn btn-sm" href="read_profil_dokter.html">Lihat Profil</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>dr.Maria Ulfa Sp. OG</td>
                    <td>
                        <div class="dpasien dokter">
                        <a class="btn btn-sm" href="read_profil_dokter.html">Lihat Profil</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>dr.Fadhillah Abriyani Sp. OG</td>
                    <td>
                        <div class="dpasien dokter">
                        <a class="btn btn-sm" href="read_profil_doktern.html">Lihat Profil</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>dr.Agus Sp. OG</td>
                    <td>
                        <div class="dpasien dokter">
                        <a class="btn btn-sm" href="read_profil_dokter.html">Lihat Profil</a>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
      </div>
        </div>
        </div>
        </div>           
     </div>
    </body>
  </html>