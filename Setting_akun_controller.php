<?php
include_once 'koneksi.php';
include_once 'model/Member.php';

// Tangkap request form
$fullname = $_POST['fullname']; // Ganti "nama" dengan nama input yang sesuai
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$foto = $_POST['foto'];

$tombol = $_POST['proses'];

// Simpan data dalam array
$data = [
    $fullname,
    $email,
    $username,
    $password,
    $role,
    $foto,
];

// Eksekusi tombol
$obj_member = new Member();
switch ($tombol) {
    case 'simpan':
        $obj_member->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj_member->ubah($data);
        break;
    case 'hapus':
        if (isset($_POST['id'])) {
            $obj_member->hapus($_POST['id']);
        }
        break;
    default:
        header('location:index.php?hal=setting_akun_list');
        break;
}

// Redirect pengguna
header('location:index.php?hal=setting_akun_list');
