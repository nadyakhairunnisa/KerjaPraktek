<?php
//$bulan = date('n');
//$bulan = 6;
//echo date("j", mktime(0, 0, 0, $bulan+1, 0, date('Y')));die;
  include("process/check_login.php");
  include("connect/connect.php");
  $id=$_GET['id'];
  $sql = mysqli_query($conn, "SELECT * FROM pasien WHERE id =$id LIMIT 1");
  $pasien = mysqli_fetch_array($sql);
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

    <body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" <?php echo ("href='pasien_home.php?id=$pasien[id]'"); ?>></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a <?php echo ("href='pasien_home.php?id=$pasien[id]'"); ?>>Home</a></li>          
          <li><a <?php echo ("href='pasien_profil.php?id=$pasien[id]'"); ?>>Profil</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>
    <!-- Navbar end -->


  <!-- Carousel Slider -->       
   <div id="first-slider">
     <div id="carousel-top" class="carousel slide carousel-fade ">
         <!-- Indicators -->
         <ol class="carousel-indicators">
             <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
             <li data-target="#carousel-top" data-slide-to="1"></li>
             <li data-target="#carousel-top" data-slide-to="2"></li>
             <li data-target="#carousel-top" data-slide-to="3"></li>
         </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
             <!-- Item 1 -->
           <div class="item active slide1 parallax ">
              <div class="row">
                <div class="container">
                   <div class="col-md-12 text-center">
                   <p  data-animation="animated fadeInDown">Kehamilan adalah awal dari masa depan anak-anak anda yang cerah <br> karenanya persiapkanlah dengan sebaik mungkin</p>
                   <h3  data-animation="animated fadeInLeft">Diari <span class="blue">Ibu Hamil</span></h3>
                   <a href="#kalender" class="btn btn-info" data-animation="animated fadeInUp" role="button">Kalenderku</a>
                   </div>
               </div>
             </div>
            </div>
           <!-- Item 2 -->
           <div class="item slide2 parallax">
               <div class="row"><div class="container">
                 <div class="col-md-12 text-center">
                   <p  data-animation="animated fadeInUp">Seorang bayi dapat membuat cinta menjadi lebih kuat, siang menjadi pendek, malam menjadi panjang, masa lalu terlupakan dan masa depan pantas untuk dihidupkan</p>
                   <h3 data-animation="animated fadeInDown">Kehidupan <span class="blue">Baru</span></h3>
                  <a href="#kalender" class="btn btn-info" data-animation="animated fadeInUp" role="button">Kalenderku</a>
                  </div>
                  </div>
                </div>
           </div>
           <!-- Item 3 -->
           <div class="item slide3 parallax">
              <div class="row">
                <div class="container">
                   <div class="col-md-12 text-center">
                   <h3  data-animation="animated fadeInLeft"><span class="blue">Ibu Bahagia </span> Bayi Sehat</h3>
                   <p  data-animation="animated fadeInUp">Ketika seoarang anak baru lahir, ibunya juga baru lahir. Karena seorang ibu belum ada sebelumnya </p>
                   <a href="#kalender" class="btn btn-info" data-animation="animated fadeInUp" role="button">Kalenderku</a>
                   </div>
               </div></div>
           </div>
           <!-- Item 4 -->
           <div class="item slide4 parallax">
              <div class="row">
                <div class="container">
                   <div class="col-md-12 text-center">
                   <p  data-animation="animated fadeInUp">Kelahiran adalah permulaan spiritual yang paling mendalam yang dapat dimiliki seorang wanita</p>
                   <h3 data-animation="animated fadeInDown">Membuat <span class="blue">Keajaiban</span></h3>
                   <a href="#kalender" class="btn btn-info" data-animation="animated fadeInUp" role="button">Kalenderku</a>
                    </div>
               </div>
             </div>
           </div>

        </div>
      </div>
   </div> <!-- Slider end -->


   <!-- Calendar -->
   <div class="col-md-12 container" id="kalender">
    
     <div class="col-md-7 col-xs-12 calendar">
      <h3 style="color: #ff6666">Klik Tanggal untuk Melihat Pemberitahuan</h3>
      <div class="calendar_item">
        <div class="month">
          November 2017
        </div>
        <div class="day">
          <p>Senin</p>
          <p>Selasa</p>
          <p>Rabu</p>
          <p>Kamis</p>
          <p>Jumat</p>
          <p>Sabtu</p>
          <p>Minggu</p>
        </div>
        <div class="date">
         <p></p>
          <p>1</p><p>2</p><p>3</p><p>4</p><p>5</p><p>6</p><p>7</p>
          <p>8</p><p class="active_1" data-toggle="collapse" data-target="#data_1">9</p><p>10</p><p>11</p><p>12</p><p>13</p><p class="active_2" data-toggle="collapse" data-target="#data_2">14</p>
          <p>15</p><p>16</p><p>17</p><p class="active_3" data-toggle="collapse" data-target="#data_3">18</p><p>19</p><p>20</p><p>21</p>
          <p>22</p><p>23</p><p>24</p><p>25</p><p>26</p><p>27</p><p>28</p>
          <p>29</p><p>30</p><p>31</p>
        </div>
      </div>
    </div>

     <div class="col-md-4 col-xs-12 event_detail">
      <div class="header">
        Pemberitahuan
      </div>
      <div class="collapse" id="data_1">
        <div class="card">
          <p><i class="fa fa-clock-o" aria-hidden="true"></i>Trimester Pertama : 3 Minggu</p>
          <p><i class="fa fa-calendar" aria-hidden="true"></i>9 November 2017</p>      
          <br>
          <p><i class="fa fa-user" aria-hidden="true"></i>dr. Jecky Fernando</p>
          <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Anda telah Check-Up 3kali</p>      
        </div>
        <div class="card-footer">        
          <a class="btn btn-sm" href="pasien_perkembangan.html" style="width:45%">Lihat Perkembangan</a>
        </div>    
      </div>
      <div class="collapse" id="data_2">
        <div class="card">
          <p><i class="fa fa-clock-o" aria-hidden="true"></i>Trimester Pertama : 4 Minggu</p>
          <p><i class="fa fa-calendar" aria-hidden="true"></i>14 November 2017</p>      
          <br>
          <p><i class="fa fa-user" aria-hidden="true"></i>dr. Agus Sp.OG</p>
          <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Anda telah check up 3 kali</p>      
        </div>
        <div class="card-footer">        
          <a class="btn btn-sm" href="pasien_perkembangan.html" style="width:45%">Lihat Perkembangan</a>
        </div>    
      </div>
      <div class="collapse" id="data_3">
        <div class="card">
          <p><i class="fa fa-clock-o" aria-hidden="true"></i>Trimester Pertama : 5 Minggu</p>
          <p><i class="fa fa-calendar" aria-hidden="true"></i>18 November 2017</p>      
          <br>
          <p><i class="fa fa-user" aria-hidden="true"></i>dr. Nurul Fatikah Sp.OG</p>
          <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Anda telah Check Up 3 kali</p>      
        </div>
        <div class="card-footer">        
          <a class="btn btn-sm" href="pasien_perkembangan.html" style="width:45%">Lihat Perkembangan</a>
        </div>    
      </div>
    </div>

    <div class="col-md-5">
      <div class="kotak">
        <div class="col-md-1 ket_1"></div>
        <div class="col-md-3">Hari Ini</div>
         
        <div class="col-md-1 ket_3"></div>
        <div class="col-md-3">Check Up</div>
         <div class="col-md-1 ket_2"></div>
        <div class="col-md-3">Check Up Selanjutnya</div><br>      
      </div>
    </div>

  </div><!-- Calendar end -->
          

           

    </body>
  </html>
