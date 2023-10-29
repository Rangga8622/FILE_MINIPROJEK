<?php
class Mahasiswa
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh; //memanggil variabel di file lain
        $this->koneksi = $dbh;
    }
    //member3 fungsionalitas
    public function index()
    {
        //$sql = "SELECT * FROM Mahasiswa";
        $sql = "SELECT
        mahasiswa.id,
        mahasiswa.nama AS nama,
        agama.nama AS agama,
        
        mahasiswa.hp AS No_HP,
        mahasiswa.Email ,
        mahasiswa.sosmed AS Social_Media,
        mahasiswa.kampus AS universitas,
        mahasiswa.foto  AS foto
        
    FROM mahasiswa
    INNER JOIN agama ON mahasiswa.id_agama = agama.id";

        //$rs = $this->koneksi->query($sql);
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }


    public function getMahasiswa($id)
    {
        $sql = "SELECT mahasiswa.id, mahasiswa.nama, mahasiswa.gender, mahasiswa.tempat_lahir, mahasiswa.tanggal_lahir, mahasiswa.alamat, mahasiswa.hp, mahasiswa.Email, mahasiswa.kampus, mahasiswa.sosmed, mahasiswa.foto, mahasiswa.quotes, agama.nama AS agama, mahasiswa.id_agama
            FROM mahasiswa
            INNER JOIN agama ON mahasiswa.id_agama = agama.id
            WHERE mahasiswa.id = ?";

        // PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }




    public function simpan($data)
    {
        $sql = "INSERT INTO mahasiswa ( nama, gender, tempat_lahir, tanggal_lahir,alamat,hp,id_agama, Email, kampus, sosmed, foto, quotes)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        // PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {

        $sql = "UPDATE mahasiswa SET nama=?, gender=?,  tempat_lahir=?, tanggal_lahir=?, alamat=?, hp=? ,  id_agama=? , Email=?, kampus=?, sosmed=?, foto=?, quotes=?
                WHERE id = ?";

        // PDO prepare statement
        $ps = $this->koneksi->prepare($sql);

        // Eksekusi statement
        $ps->execute($data);
    }

    public function hapus($id)
    {

        $sql = "DELETE FROM mahasiswa WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    public function filter($agama)
    {
        $sql = "SELECT
        mahasiswa.id,
        mahasiswa.nama AS nama,
        agama.nama AS agama,
        
        mahasiswa.hp AS No_HP,
        mahasiswa.Email ,
        mahasiswa.sosmed AS Social_Media,
        mahasiswa.kampus AS universitas,
        mahasiswa.foto 
        
    FROM mahasiswa
    INNER JOIN agama ON mahasiswa.id_agama = agama.id
    WHERE agama.id = ?";
        //$rs = $this->koneksi->query($sql);
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$agama]);
        $rs = $ps->fetchAll();
        return $rs;
    }
}
