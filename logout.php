<?php
session_start();
unset($_SESSION['MEMBER']);
header('location:index.php?hal=mahasiswa_list');