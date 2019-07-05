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
      <table class="table" width="100%" style="font-size:11px">
        <tr>
          <th>Station</th>
          <th>Tiba</th>
          <th>Berangkat</th>
        </tr>
        <tr>
          <td>Dinas Perhubungan</td>
          <td>-</td>
          <td>5.30 AM</td>
        </tr>
        <tr>
          <td>SMA Bhayangkari</td>
          <td>5.36 AM</td>
          <td>5.38 AM</td>
        </tr>
        <tr>
          <td>SMPN 32 Surabaya</td>
          <td>5.42 AM</td>
          <td>5.44 AM</td>
        </tr>
        <tr>
          <td>SMP / SMA Santa Maria</td>
          <td>5.57 AM</td>
          <td>5.59 AM</td>
        </tr>
        <tr>
          <td>SD Negeri Kaliasin V</td>
          <td>6.24 AM</td>
          <td>6.28 AM</td>
        </tr>
        <tr>
          <td>SMAN 6 Surabaya</td>
          <td>06.36 AM</td>
          <td>06.38 AM</td>
        </tr>
        <tr>
          <td>SMPN 1 Surabaya</td>
          <td>06.49 AM</td>
          <td>06.51 AM</td>
        </tr>
        <tr>
          <td>SMA Komplek</td>
          <td>06.56 AM</td>
          <td>06.58 AM</td>
        </tr>
        <tr>
          <td>SMAN 4 Surabaya</td>
          <td>07.14 AM</td>
          <td>07.16 AM</td>
        </tr>
        <tr>
          <td>SMKN 5 Surabaya</td>
          <td>07.26 AM</td>
          <td> - </td>
        </tr>
      </table>
      <div class="col-md-12" style="margin-top:20px">
        <a href="menu.php" type="submit" name="" class="btn btn-danger" style="width:100%;">Back</a>
      </div>
    </div>
  </div>
<!-- End service Area -->
<?php include "footer.php"; ?>
