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
    <script src="js/js.js"></script>
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
        <h1>~ Kelola Profil Pasien ~</h1>
    </div>

    <div class="col-md-7 edit">        
        <div class="col-md-12 input"> 
        <form class="form-horizontal" role="form" method="post" action="process/pasien/add_pasien.php" align="">
            <label>Nama</label>
            <input type="text" name="nama" required><br>
            <label>No HP</label>
            <input type="text" name="no_hp" required>
            <label style="margin-top: 10px;">Golongan Darah</label>
               <select class="form-control col-md-offset-2" name="gol_darah" style="width: 85%; height: 50px;margin-top: 15px;">
                   <option>A</option>
                   <option>B</option>
                   <option>AB</option>
                   <option>O</option>
               </select> 
            <label>Usia</label>
            <input type="text" name="usia" required><br>
            <label>Alamat</label>
            <input type="text" name="alamat" required><br>
            <label>Nama Wali</label>
            <input type="text" name="nama_wali" required><br>
            <label>Tanggal</label>
            <input type="date" name="tanggal" required><br>
             <div class="form-group last">
                <div class="text-center" id="kelola">
                    <button type="submit" name="login" style="border: none; background: #ff6666;"><div onclick="return konfirmasi_tambah()" class="btn btn-sm">Simpan</div></button></a>
                    <a onclick="return konfirmasi_hapus()" class="btn btn-default btn-sm" href="read_daftar_pasien.php" style="color: #ff6666">Cancel</a>
                </div>
            </div>
        </div> 
                     
    </div>    
    <div class="col-md-5 edit">
        <img src="images/mother.png">
    </div>      

           

    </body>
  </html>