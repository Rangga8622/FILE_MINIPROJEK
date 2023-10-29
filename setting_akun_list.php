<?php
// Buat array untuk judul kolom
$ar_judul4 = ['NO', 'FULL NAME', 'EMAIL', 'USERNAME', 'PASSWORD', 'ROLE', 'FOTO', 'ACTION'];

// Buat objek dari class member
$obj_member = new Member();

// Panggil fungsionalitas terkait untuk mengambil data Member
$rs = $obj_member->index();


if (isset($_SESSION['MEMBER']) && $_SESSION['MEMBER']['role'] != 'mahasiswa') {

?>
<div class="animate__animated animate__fadeIn animate__slower">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">DATA AKUN</h5>
            <a href="index.php?hal=Setting_akun_form" class="btn btn-primary">Tambah</a>

            <!-- Tambahkan div dengan class "table-responsive" di sekitar tabel -->
            <div class="table-responsive">
              <table class="table table-responsive-lg datatable">
                <thead>
                  <tr>

                    <?php
                    // Tampilkan judul kolom
                    foreach ($ar_judul4 as $jdl) {
                      echo '<th>' . $jdl . '</th>';
                    }
                    ?>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($rs as $member) {
                  ?>
                    <tr>

                      <td><?= $no ?></td>

                      <td><?= $member['fullname'] ?></td>
                      <td><?= $member['email'] ?></td>
                      <td><?= $member['username'] ?></td>
                      <td><?= $member['password'] ?></td>
                      <td><?= $member['role'] ?></td>
                      <td><?= $member['foto'] ?></td>
                      <td>
                        <!-- Tambahkan tombol Edit dan Hapus -->
                        <form method="POST" action="Setting_akun_controller.php">
                          <div class="btn-group">
                            <a href="index.php?hal=Setting_akun_form&id=<?= $member['id'] ?>" title="Edit Data" class="btn btn-warning btn-sm mr-2">
                              <i class="bi bi-pencil"></i> Edit
                            </a>
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" name="proses" value="hapus" class="btn btn-danger btn-sm mx-2">
                              <i class="bi bi-trash"></i> Hapus
                            </button>
                            <input type="hidden" name="id" value="<?= $member['id'] ?>" />
                          </div>
                        </form>
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
  </section>
</div>
<?php } else {

  include_once 'acces_denied.php';
}
