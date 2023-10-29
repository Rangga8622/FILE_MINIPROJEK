<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.php?hal=mahasiswa_list" class="logo d-flex align-items-center">
      <img src="assets/img/logo_my.png" alt="">
      <span class="d-none d-lg-block">contact Personal</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->



  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-2">

      </li>
      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['MEMBER']['username'] ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">

            <h6><?= $_SESSION['MEMBER']['username'] ?></h6>
            <span><?= $_SESSION['MEMBER']['role'] ?></span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <?php
          if (!isset($_SESSION['MEMBER'])) {
          ?>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="login/login.php">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php
          } else {
            if ($_SESSION['MEMBER']['role'] == 'admin') {
            ?>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="index.php?hal=setting_akun_list">
                  <i class="bi bi-gear"></i>
                  <span>Setting akun</span>
                </a>
              </li>
            <?php
            }
            ?>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          <?php
          }
          ?>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>