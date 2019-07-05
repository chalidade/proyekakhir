<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>Input Pasien</h3>
        <p>Input Pasien Rumah Sakit Kristen Mojowarno</p>
        <hr>
      </div>
    </div>
    <div class="row">
      <table id="myTable" class="table table-responsive" style="font-size:11px;width:100%;padding:10px;">
        <tr>
          <th width="50%">Nama</th>
          <th>Alamat</th>
          <th>Usia</th>
          <th>Option</th>
        </tr>
        <?php
          $pasien      = mysqli_query($connect, "SELECT * FROM `pasien`");
          while ($data = mysqli_fetch_array($pasien)) {
          $id          = $data['id'];
          $nama        = $data['nama'];
          $alamat      = $data['alamat'];
          $usia        = $data['usia'];
          $beacon      = $data['id_beacon'];
        ?>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $alamat; ?></td>
          <td><?php echo $usia; ?></td>
          <td> <a href="proses/pasien.php?id=hapus&data=<?php echo $id; ?>"> Hapus</a></td>
        </tr>
        <?php
          }
         ?>
         <tr>
           <td colspan="4">
             <button type="button"  data-toggle="modal" data-target="#add" class="btn btn-warning" style="width:100%;margin-top:20px" name="button">Tambah Pasien</button>
             <a href="index.php" class="btn btn-danger" style="width:100%;margin-top:10px">Kembali</a>
           </td>
         </tr>
       </table>



          <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Data Pasien</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="col-md-12">
                    <form class="" action="proses/pasien.php" method="post">
                    <h5>Nama Lengkap
                    <input type="text" class="form-control" name="nama" value="" style="margin-top:10px;">
                    </h5>
                    <h5 style="margin-top:20px">Alamat
                    <input type="text" class="form-control" name="alamat" value="" style="margin-top:10px;">
                    </h5>
                    <h5 style="margin-top:20px">Usia
                    <input type="text" class="form-control" name="usia" value="" style="margin-top:10px;">
                    </h5>
                    <h5 style="margin-top:20px">Id Beacon
                    <input type="text" class="form-control" name="beacon" value="" style="margin-top:10px;">
                    </h5>
                    <h5 style="margin-top:20px">
                    <input type="submit" class="btn btn-primary" value="Simpan" style="margin-top:10px;width:100%">
                    </h5>
                  </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->
<?php include "footer.php"; ?>
