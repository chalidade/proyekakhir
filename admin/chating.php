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
  <title>School Bus</title>

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
      <!-- <center style="width: 100%;"><h4>Start Chatting</h4></center> -->
      <table style="margin-top:20px;margin-left:20px;font-size:12px">
        <tr>
          <td width="20%" style="vertical-align:top"><font style="font-weight:600">Chalid</font></td>
          <td width="2%" style="vertical-align:top">:</td>
          <td>Jadi rencananya besok kamu naik bis lagi ?</td>
        </tr>
        <tr>
          <td width="20%" style="vertical-align:top"><font style="font-weight:600">Bagas</font></td>
          <td width="2%" style="vertical-align:top">:</td>
          <td>Iya rencananya naik bis lagi, soalnya orang tuaku nggak bisa nganter</td>
        </tr>
      </table>
      <div class="col-md-12 sticky" style="margin-top:20px">
        <input type="text" name="" class="form-control" placeholder="Type Message ..">
        <a href="menu.php" type="submit" name="" class="btn btn-danger" style="width:100%;margin-top:10px">Back</a>
      </div>
    </div>
  </div>
<!-- End service Area -->
<?php include "footer.php"; ?>
