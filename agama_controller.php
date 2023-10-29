<?php
session_start();
include_once 'koneksi.php';
include_once 'model/Agama.php';

// 1. Tangkap request form (dari name pada elemen form)
$nama = $_POST['nama'];
$tombol = $_POST['proses']; // untuk keperluan eksekusi sebuah tombol di form


// 2. Simpan ke dalam sebuah array
$data = [
    $nama,

];

// 3. Eksekusi tombol
$obj_agama = new Agama(); // Sesuaikan dengan model yang sesuai 
switch ($tombol) {
    case 'simpan':
        $obj_agama->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj_agama->ubah($data);
        break;
    case 'hapus':
        $obj_agama->hapus($_POST['id']);
    default:
        header('location:index.php?hal=agama_list');
        break;
}



// 4. Setelah selesai, arahkan pengguna ke halaman mahasiswa
header('location:index.php?hal=agama_list');
