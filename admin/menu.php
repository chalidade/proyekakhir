<?php
error_reporting(0);
session_start();
include "proses/koneksi.php";
 ?>

<!DOCTYPE html>
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="Colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Pembangkit Jawa Bali</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/fontawesome-markers.min.js"></script>
  </head>
  <body>

<!-- Start service Area -->
  <div class="container">
    <div class="row" style="margin-top:40px">
      <div class="col-6">
        <center>
          <a href="schedule.php">
        <img src="img/jam.png" alt="" style="width:70px">
        <p style="font-size:12px;font-weight:500;margin-top:10px;color:#000">Bus Schedule</p>
      </a>
        </center>
      </div>
      <div class="col-6">
        <center>
        <a href="user.php">
        <img src="img/user.png" alt="" style="width:70px">
        <p style="font-size:12px;font-weight:500;margin-top:10px;color:#000">Account</p>
        </a>
      </center>
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <div class="col-6">
        <center>
        <a href="report.php">
        <img src="img/cone.png" alt="" style="width:70px">
        <p style="font-size:12px;font-weight:500;margin-top:10px;color:#000">Report</p>
        </a>
        </center>
      </div>
      <div class="col-6">
        <center>
        <a href="chating.php">
        <img src="img/twitter.png" alt="" style="width:70px">
        <p style="font-size:12px;font-weight:500;margin-top:10px;color:#000">Chating</p>
        </a>
        </center>
      </div>
    </div>
  </div>
<!-- End service Area -->
<?php include "footer.php"; ?>
