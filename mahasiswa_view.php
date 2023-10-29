<?php
$id = $_REQUEST['id'];
$model = new Mahasiswa();
$rs  = $model->getMahasiswa($id); // Panggil fungsi untuk mendapatkan detail mahasiswa
?>
<!--  -->

<style>
  .profile {
    background-color: #f5f5f5;
    border-radius: 10px;

    padding: 30px;
    margin: 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .profile:hover {
    transform: scale(1.01);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .profile img {
    border-radius: 50%;
    margin-bottom: 20px;
  }

  .profile .nama {
    font-family: 'Open Sans', sans-serif;
    font-size: 26px;
    color: #555555;
  }

  .profile p {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    color: #888888;
  }

  .profile p i {
    font-size: 18px;
    color: #cccccc;
    transition: all 0.3s;
  }

  .profile p i:hover {
    color: #333;
  }

  .col-md-8 {
    flex: 0 0 70%;
  }

  .btn {
    padding: 10px 20px;
    border-radius: 30px;
    background: #007bff;
    color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
  }

  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }

  @media (max-width: 992px) {

    .row {
      flex-direction: column;
    }

    .col-lg-6 {
      width: 100%;
    }
  }
</style>


<div class="container">
  <div class="row d-flex align-items-center">

    <div class="col-lg-6 order-lg-1">

      <div class="image-profile">

        <div class="profile">

          <?php if (!empty($rs['foto'])) : ?>
            <img src="image/dataimg/<?= $rs['foto'] ?>" class="img-fluid rounded-circle">
          <?php else : ?>
            <img src="image/nophoto.jpg" class="img-fluid rounded-circle">
          <?php endif; ?>

        </div>

      </div>

    </div>

    <div class="col-lg-6 order-lg-2">

      <div class="content-profile">

        <div class="profile">

          <h3 class="nama"><?php echo $rs['nama']; ?></h3>

          <p>
            <i class="fas fa-user"></i> <b>Gender:</b> <?php echo $rs['gender']; ?> <br>

            <i class="fas fa-map-marker-alt"></i> <b>Tempat Lahir:</b> <?php echo $rs['tempat_lahir']; ?> <br>

            <i class="far fa-calendar-alt"></i> <b>Tanggal Lahir:</b> <?php echo $rs['tanggal_lahir']; ?> <br>

            <i class="fas fa-home"></i> <b>Alamat:</b> <?php echo $rs['alamat']; ?> <br>

            <i class="fas fa-mobile-alt"></i> <b>HP:</b> <?php echo $rs['hp']; ?> <br>

            <i class="far fa-envelope"></i> <b>Email:</b> <?php echo $rs['Email']; ?> <br>

            <i class="fas fa-university"></i> <b>Kampus:</b> <?php echo $rs['kampus']; ?> <br>

            <i class="fas fa-user-friends"></i> <b>Sosmed:</b> <?php echo $rs['sosmed']; ?> <br>

            <i class="fas fa-quote-left"></i> <b>Quotes:</b> "<?php echo $rs['quotes']; ?>" <br>

            <i class="fas fa-pray"></i> <b>Agama:</b> <?php echo $rs['agama']; ?>
          </p>

          <div class="text-center mt-3">
            <a href="index.php?hal=mahasiswa_list" class="btn btn-primary">Kembali</a>
          </div>

        </div>

      </div>

    </div>

  </div>
</div>




<script src="https://kit.fontawesome.com/6b773fe9e4.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>