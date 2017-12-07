<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PREGGIE</title>
    <link rel="icon" type="image/png" href="images/logo.png">      

    <!-- Bootstrap -->    
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- StyleSheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--   Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

    <body>
  <!-- Carousel Slider -->       
   <div id="first-slider">
    <div id="carousel-top" class="carousel slide carousel-fade ">        
        <div class="carousel-inner" role="listbox">             
        <div class="item active slide3 parallax">
                                
            <div class="col-md-12 login text-center">
                <h3 style="color: #ffb3b3">~ Selamat Datang di Preggie ~</h3>
           </div> 

        <!-- Login Start -->
         <div class="col-md-4 col-md-offset-4 login">  
            <div class="panel panel-default">
                <div class="panel-heading">
                     Silahkan Login di Sini<span class="glyphicon glyphicon-lock" style="float: right;"></span>
                 </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="process/proses_login.php" align="">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-md-12 text-center" >
                            <!-- <a class="btn btn-sm" href="pasien_home.html" style="background: #ff6666">Sign in</a> -->
                            <button class="btn btn-md" type="submit" name="login" style="width: 24%; background: #ff6666;">Sign In</button></a>
                            <a class="btn btn-default btn-md" href="login.php">Reset</a>
                        </div>
                    </div>
                    </form>
                </div>
           </div>
           <!--  Login end -->
        </div>
        </div>           
     </div>
    </div>
          

           

    </body>
  </html>
