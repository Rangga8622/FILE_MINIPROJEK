<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <?php
    if (!isset($_SESSION['MEMBER'])) { //----belum login------
    ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?hal=mahasiswa_list">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span>
        </a>
      </li>

      <?php } else {

      if ($_SESSION['MEMBER']['role'] != 'mahasiswa') {
      ?>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="index.php?hal=agama_list">
                <i class="bi bi-circle"></i><span>Agama</span>
              </a>
            </li>


          </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php?hal=mahasiswa_form">
            <i class="bi bi-journal-text"></i><span>Tambah Data</span>
          </a>
        </li>

      <?php
      }
      ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?hal=mahasiswa_list">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Person</span>
        </a>
      </li>
    <?php } ?>



</aside>