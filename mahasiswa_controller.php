<?php
include_once 'koneksi.php';
include_once 'model/Mahasiswa.php'; // Sesuaikan dengan model yang sesuai

// 1. Tangkap request form (dari name pada elemen form)
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['gender'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['hp'];
$agama = $_POST['agama'];
$email = $_POST['email'];
$kampus = $_POST['kampus'];
$sosmed = $_POST['sosmed'];
$foto = $_POST['foto'];
$quotes = $_POST['quotes'];
$tombol = $_POST['proses']; // untuk keperluan eksekusi sebuah tombol di form


// 2. Simpan ke dalam sebuah array
$data = [
    $nama,
    $jenis_kelamin,
    $tempat_lahir,
    $tanggal_lahir,
    $alamat,
    $no_hp,
    $agama,
    $email,
    $kampus,
    $sosmed,
    $foto,
    $quotes,
];

// 3. Eksekusi tombol
$obj_mahasiswa = new Mahasiswa(); // Sesuaikan dengan model yang sesuai
switch ($tombol) {
    case 'simpan':
        $obj_mahasiswa->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj_mahasiswa->ubah($data);
        break;    
    case 'hapus':
    $obj_mahasiswa->hapus($_POST['id']);
    default:
        header('location:index.php?hal=mahasiswa_list');
        break;
}



// 4. Setelah selesai, arahkan pengguna ke halaman mahasiswa
header('location:index.php?hal=mahasiswa_list');
