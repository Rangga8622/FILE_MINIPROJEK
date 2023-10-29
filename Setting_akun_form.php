<?php
$ar_kondisi = ['admin', 'mahasiswa'];

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$obj_member = new Member();
$rs = $obj_member->index();
if (!empty($id)) {
    // panggil fungsi untuk menampilkan data lama yang ingin diubah di form
    $row = $obj_member->getMember($id); // mode edit data, form terisi data lama yang akan diedit
} else {
    $row = []; // mode input data baru, form tetap dalam keadaan kosong
}

if (isset($_SESSION['MEMBER']) && $_SESSION['MEMBER']['role'] != 'mahasiswa') {
?>
    <div class="animate__animated animate__fadeIn animate__slower">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Data member</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="Setting_akun_controller.php">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">FULL NAME</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fullname" value="<?= isset($row['fullname']) ? $row['fullname'] : '' ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">EMAIL</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" value="<?= isset($row['email']) ? $row['email'] : '' ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">USERNAME</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="<?= isset($row['username']) ? $row['username'] : '' ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">PASSWORD</label>
                                    <div class="col-sm-10">
                                        <input type="Password" class="form-control" name="password" value="<?= isset($row['password']) ? $row['password'] : '' ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">STATUS</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option selected>Pilih STATUS</option>
                                            <?php
                                            foreach ($ar_kondisi as $kondisi) {
                                                $selected = ($kondisi == isset($row['role']) ? $row['role'] : "") ? "selected" : "";
                                                echo '<option value="' . $kondisi . '" ' . $selected . '>' . $kondisi . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">FOTO</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="foto" value="<?= isset($row['foto']) ? $row['foto'] : '' ?>">
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
