<?php


$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$obj_agama = new Agama();
if (!empty($id)) {
  // panggil fungsi untuk menampilkan data lama yang ingin diubah di form
  $row = $obj_agama->getagama($id); // mode edit data, form terisi data lama yang akan diedit
} else {
  $row = []; // mode input data baru, form tetap dalam keadaan kosong
}
?>
<?php
  if(isset($_SESSION['MEMBER']) && $_SESSION['MEMBER']['role'] != 'mahasiswa'){
?>
<div class="animate__animated animate__fadeIn animate__slower">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Input Data agama</h5>

          <!-- General Form Elements -->
          <form method="POST" action="agama_controller.php">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">NAMA</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">
              </div>
            </div>
   
            <div class="text-center">
              <?php if (empty($id)) 
              {
                ?>
                  <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
              <?php }
                else 
                {
                  ?>
                  <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
                  <input type="hidden" name="idx" value="<?= $id ?>">
              <?php } ?>
              <button name="proses" type="submit" value="kembali" class="btn btn-secondary">Kembali</button>
          </div>


          </form><!-- End General Form Elements -->

        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php } else {

include_once'acces_denied.php';
}
