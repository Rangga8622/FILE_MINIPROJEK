<?php
// Buat array untuk judul kolom
$ar_judul = ['NO', 'NAMA', 'AGAMA', 'NO HP', 'EMAIL', 'SOCIAL MEDIA', 'UNIVERSITAS', 'FOTO', 'ACTION'];

// Buat objek dari class Mahasiswa 
$obj_mahasiswa = new Mahasiswa();

// Panggil fungsionalitas terkait untuk mengambil data mahasiswa
$rs = $obj_mahasiswa->index();


$id = $_REQUEST['id'];
if (!empty($id)) {
  $rs = $obj_mahasiswa->filter($id); //jika ada filter dari sidebar
} else {
  $rs = $obj_mahasiswa->index(); //jika tidak ada pencarian
}
?>

<div class="animate__animated animate__fadeIn animate__slower">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="card">

            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-11">
                    <h5 class="card-title">Data Tabel Person</h5>
                  </div>
                  <?php
                  if (isset($_SESSION['MEMBER'])) {
                  ?>
                    <div class="col col align-self-center">
                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                        <?php
                        include_once "list_filter.php";
                        ?>
                      </div>
                    </div>
                  <?php } else {
                    include_once 'access_denied.php';
                  }
                  ?>

                </div>
              </div>

              <!-- Tambahkan div dengan class "table-responsive" di sekitar tabel -->
              <div class="table-responsive">

                <table class="table table-responsive-lg datatable">
                  <thead>
                    <tr>
                      <?php
                      // Tampilkan judul kolom
                      foreach ($ar_judul as $jdl) {
                        echo '<th>' . $jdl . '</th>';
                      }
                      ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $no = 1;
                    foreach ($rs as $mahasiswa) {
                      // $idto = $mahasiswa['id'];
                    ?>
                      <tr>
                        <td><?= $no ?></td>

                        <td><?= $mahasiswa['nama'] ?></td>
                        <td><?= $mahasiswa['agama'] ?></td>
                        <td><?= $mahasiswa['No_HP'] ?></td>
                        <td><?= $mahasiswa['Email'] ?></td>
                        <td><?= $mahasiswa['Social_Media'] ?></td>
                        <td><?= $mahasiswa['universitas'] ?></td>
                        <td>
                          <?php if (!empty($mahasiswa['foto'])) : ?>
                            <img src="image/dataimg/<?= $mahasiswa['foto'] ?>" class="img-fluid ">
                          <?php else : ?>
                            <img src="image/nophoto.jpg" class="img-fluid ">
                          <?php endif; ?>
                        </td>


                        <td>
                          <!-- Tambahkan action -->

                          <form method="POST" action="mahasiswa_controller.php">
                            <div class="btn-group">
                              <?php
                              if (!isset($_SESSION['MEMBER'])) { //----belum login------
                              ?>
                                <?php } else {

                                if ($_SESSION['MEMBER']['role'] == 'admin') {
                                ?>
                                  <a href="index.php?hal=mahasiswa_view&id=<?= $mahasiswa['id'] ?>" title="Lihat Produk" class="btn btn-info btn-sm mr-2">
                                    <i class="bi bi-eye"></i> View
                                  </a>

                                  <a href="index.php?hal=mahasiswa_form&id=<?= $mahasiswa['id'] ?>" title="Edit Produk" class="btn btn-warning btn-sm mx-2">
                                    <i class="bi bi-pencil"></i> Edit
                                  </a>

                                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" name="proses" value="hapus" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                  </button>
                                  <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>" />


                                <?php
                                } else {
                                ?>
                                  <a href="index.php?hal=mahasiswa_view&id=<?= $mahasiswa['id'] ?>" title="Lihat Produk" class="btn btn-info btn-sm mr-2">
                                    <i class="bi bi-eye"></i> View
                                  </a>
                              <?php
                                }
                              }
                              ?>



                            </div>
                          </form>



              </div>

              </td>
              </tr>
            <?php
                      $no++;
                    }
            ?>
            </tbody>
            </table>
            </div>
            <!-- Tutup div "table-responsive" -->
          </div>
        </div>
      </div>
    </div>

</div>
</section>
</div>