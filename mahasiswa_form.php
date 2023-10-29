<?php

$obj_agama = new Agama();
$rs_1 = $obj_agama->index();

$ar_kondisi = ['L' => 'Laki-laki', 'P' => 'Perempuan']; // Pilihan jenis kelamin dan nilainya


$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$obj_mahasiswa = new Mahasiswa();
if (!empty($id)) {
  // panggil fungsi untuk menampilkan data lama yang ingin diubah di form
  $row = $obj_mahasiswa->getMahasiswa($id); // mode edit data, form terisi data lama yang akan diedit
} else {
  $row = []; // mode input data baru, form tetap dalam keadaan kosong
}
?>

<?php
if (isset($_SESSION['MEMBER']) && $_SESSION['MEMBER']['role'] != 'mahasiswa') {
?>
  <div class="animate__animated animate__fadeIn animate__slower">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Data Person</h5>

              <!-- General Form Elements -->
              <form method="POST" action="mahasiswa_controller.php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">NAMA</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">
                  </div>
                </div>

                <!-- Jenis Kelamin -->
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">JENIS KELAMIN</legend>
                  <div class="col-sm-10">
                    <?php foreach ($ar_kondisi as $key => $label) : ?>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="<?= $key ?>" value="<?= $key ?>" <?= ($row['gender'] == $key) ? "checked" : "" ?>>
                        <label class="form-check-label" for="<?= $key ?>">
                          <?= $label ?>
                        </label>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </fieldset>


                <!-- Tambahkan bagian ini untuk setiap elemen input -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" value="<?= isset($row['tempat_lahir']) ? $row['tempat_lahir'] : '' ?>">
                  </div>
                </div>

                <!-- Tanggal Lahir -->
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_lahir" value="<?= isset($row['tanggal_lahir']) ? $row['tanggal_lahir'] : '' ?>">
                  </div>
                </div>

                <!-- Alamat -->
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">ALAMAT</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="alamat"><?= isset($row['alamat']) ? $row['alamat'] : '' ?></textarea>
                  </div>
                </div>

                <!-- NO HP -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">NO HP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hp" value="<?= isset($row['hp']) ? $row['hp'] : '' ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">AGAMA</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="agama">
                      <option selected>Pilih Agama</option>
                      <?php
                      foreach ($rs_1 as $agama) {
                        $sel = ($agama['id'] == $row['id_agama']) ? "selected" : "";
                        echo '<option value="' . $agama['id'] . '" ' . $sel . '>' . $agama['nama'] . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- Email -->
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?= isset($row['Email']) ? $row['Email'] : '' ?>">
                  </div>
                </div>

                <!-- UNIVERSITAS -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">UNIVERSITAS</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kampus" value="<?= isset($row['kampus']) ? $row['kampus'] : '' ?>">
                  </div>
                </div>

                <!-- Social Media -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Social Media</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sosmed" value="<?= isset($row['sosmed']) ? $row['sosmed'] : '' ?>">
                  </div>
                </div>

                <!-- Foto -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="foto" value="<?= isset($row['foto']) ? $row['foto'] : '' ?>">
                  </div>
                </div>

                <!-- Quotes -->
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Quotes</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="quotes" value="<?= isset($row['quotes']) ? $row['quotes'] : '' ?>">
                  </div>
                </div>


                <div class="text-center">
                  <?php if (empty($id)) {
                  ?>
                    <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                  <?php } else {
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

  include_once 'acces_denied.php';
}
