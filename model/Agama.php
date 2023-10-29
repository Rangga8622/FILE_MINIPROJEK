<?php
class Agama{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor
    public function __construct(){
        global $dbh; // globalkan instance obj $dbh di file koneksi.php
        $this->koneksi = $dbh;
    }
    //member3 fungsionalitas
    public function index(){
        $sql = "SELECT * FROM agama";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function getagama($id) {
        $sql = "SELECT id,nama
                FROM agama
                WHERE id = ?";
        
        // PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO agama ( nama)
        VALUES (?)";
        // PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data) {
        
        $sql = "UPDATE agama SET nama=?
                WHERE id = ?";
        
        // PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        
        // Eksekusi statement
        $ps->execute($data);
    }

    public function hapus($id) {
        
        $sql = "DELETE FROM agama WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

}