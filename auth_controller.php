<?php
session_start();
include_once 'koneksi.php';
include_once 'model/Member.php';
//1. tangkap request form (dari name2 element form)
$username = $_POST['username']; 
$password = $_POST['password']; 
//2. simpan ke sebuah array
$data = [
    $username, // ? 1
    $password, // ? 2
];
//3. eksekusi tombol
$obj_member = new Member();
$rs = $obj_member->auth($data); 

// Proses login
if(!empty($rs)){
  // Login sukses
  $_SESSION['MEMBER'] = $rs;
  header('location:index.php?hal=mahasiswa_list');

} else {

    header('location:gagal_login.php');
}
