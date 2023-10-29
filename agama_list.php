<?php
// Buat array untuk judul kolom
$ar_judul = ['NO', 'NAMA','ACTION'];

// Buat objek dari class Agama 
$obj_agama = new Agama();

// Panggil fungsionalitas terkait untuk mengambil data agama
$rs = $obj_agama->index();

?>
<div class="animate__animated animate__fadeIn animate__slower">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Tabel Agama</h5>
          
          <!-- Tambahkan div dengan class "table-responsive" di sekitar tabel -->
          <div class="table-responsive">
            <table class="table table-responsive-lg datatable">
              
              <thead>
              
                <tr>
                <a href="index.php?hal=agama_form&id=<?= $agama['id'] ?>" title="Tambah Data" class="btn btn-info btn-sm mr-2">
            <i class="bi bi-file-earmark-plus-fill"></i> Tambah
          </a>
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
                foreach ($rs as $agama) {
                  // $idto = $agama['id'];
                ?>
                  <tr>
                    <td><?= $no ?></td>
                    
                    <td><?= $agama['nama'] ?></td>

                    
                    <td>
                      <!-- Tambahkan action -->
                      <form method="POST" action="agama_controller.php">
                        <div class="btn-group">
                            
                            <a href="index.php?hal=agama_form&id=<?= $agama['id'] ?>" title="Edit Data" class="btn btn-warning btn-sm mx-2">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" name="proses" value="hapus" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                            <input type="hidden" name="id" value="<?= $agama['id'] ?>" /> 
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
</section>
</div>

