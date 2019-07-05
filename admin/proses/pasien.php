<?php
error_reporting(0);
include "koneksi.php";

$id     = $_REQUEST['id'];
$data   = $_REQUEST['data'];

if ($id == "hapus") {
  $delete = mysqli_query($connect, "DELETE FROM `pasien` WHERE `pasien`.`id` = '$data'");
  echo "<script>alert('Data pasien berhasil hapus');window.location = '../input_pasien.php';</script>";
} else if($id == "lokasi") {
  $rssi           = $_POST['rssi'];
  $lokasi         = $_POST['lokasi'];
  $nama_file      = $_FILES['file']['name'];
  $ukuran_file    = $_FILES['file']['size'];
  $tipe_file      = $_FILES['file']['type'];
  $tmp_file       = $_FILES['file']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
  $target_dir     = "upload/";
  $target_file_1  = $target_dir . basename($_FILES["file"]["name"]);

  if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_1)) {
    // echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";

  } else {
    // echo "Sorry, there was an error uploading your file.";
  }

  $insert = mysqli_query($connect, "INSERT INTO `lokasi` (`id`, `nama`, `ukuran`, `tipe`, `rssi`, `lokasi`) VALUES (NULL, '$nama_file', '$ukuran_file', '$tipe_file', '$rssi', '$lokasi');");
  echo "<script>alert('Data Lokasi Di Update');window.location = '../input_lokasi.php';</script>";
} else if($id == "hapuslokasi") {
  $delete = mysqli_query($connect, "DELETE FROM `lokasi` WHERE `lokasi`.`id` = '$data'");
  echo "<script>alert('Data Lokasi Di hapus');window.location = '../input_lokasi.php';</script>";
} else {
  $nama   = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $usia   = $_POST['usia'];
  $beacon = $_POST['beacon'];

  $pasien = mysqli_query($connect, "INSERT INTO `pasien` (`id`, `nama`, `alamat`, `usia`, `id_beacon`) VALUES (NULL, '$nama', '$alamat', '$usia', '$beacon');");
  echo "<script>alert('Data pasien berhasil disimpan');window.location = '../input_pasien.php';</script>";
}

 ?>
