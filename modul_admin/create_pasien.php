<?php
  include("../proses/check_login.php");
  include("../connect/connect.php");
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PREGGIE</title>    
    <link rel="icon" href="images/preggie.png"> 

    <!-- FontAwesome  Google -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">        
    <!-- Stylesheet Endede-->    

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>            
          </button>            

            <a class="navbar-brand page-scroll navbar-left" href="#page-top">SI BUMIL</a>                               
            </div>

          <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="home_admin.php" class="page-scroll top">HOME</a></li>
                <li><a href="read_pasien.php" class="page-scroll">DATA PASIEN</a></li>               
                <li><a href="read_bidan.php" class="page-scroll">DATA DOKTER</a></li>              
                <li><a class="page-scroll">Login As Perawat</a></li>                
                <li><a href="../proses/logout.php" class="page-scroll">Sign-Out</a></li>                
            </ul>              
          </div>        
        </div>        
      </nav>


      <h1 style="text-align: center; margin-top:85px; color:black;">Tambah Data Pasien</h1>
        <form action="proses/pasien/add_pasien.php" method="POST"  enctype="multipart/form-data" style="margin-top:50px;">
           <label>Nama</label> <br>
                <input id="nama" name="nama" type="text" placeholder="Nama" maxlength="255" required> <br>
            <label>No. Handphone</label> <br>
                <input id="no_hp" name="no_hp" type="text" placeholder="No. HP" maxlength="15" required> <br>
             <label>Alamat</label> <br>
                <textarea id="alamat" name="alamat" style="width:55%;" required></textarea> <br>  
            <!--  <label>Golongan Darah</label> <br>
                <input id="gol_darah" name="gol_darah" type="text" placeholder="Golongan Darah" required> <br> -->
            <label>Golongan Darah</label> <br>
                 <div class="form-group" style="margin:0px 100px;">
                  <label for="sel1"></label>
                   <select class="form-control" id="sel1" name="gol_darah">
                   <option>A</option>
                   <option>B</option>
                   <option>AB</option>
                   <option>O</option>
                   </select>    
                  </div>
            <label>Usia</label> <br>
                <input id="usia" name="usia" type="text" placeholder="Usia" maxlength="5" required> <br>
            <label>Nama Wali</label> <br>
                <input id="nama_wali" name="nama_wali" type="text" placeholder="Nama Wali" maxlength="255" required> <br>
             <label>Tanggal</label> <br>
                <input id="tanggal" name="tanggal" type="date" placeholder="Tanggal Masuk" required> <br>
                <button type="submit" onclick="return konfirmasi_kirim()" name="save">Submit</button>

        </form>
  <!-- This Background Slider -->
  
    <!-- All Of Script -->
    <script type="text/javascript" src="js/file.js"></script>
    <script src="js/jquery.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>        
    <script>
        new WOW().init();
    </script>
    <!-- All Of Script -->    


  </body>
</html>