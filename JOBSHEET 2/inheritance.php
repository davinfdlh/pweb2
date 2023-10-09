<?php
class manusia{
    public $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya=$saya;
    }
}
class mahasiswa extends manusia
{
    public $nama_mahasiswa;
    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}
$informatika = new mahasiswa();

$informatika->panggil_nama("Davin");
$informatika->panggil_mahasiswa("Fadilah");

echo "Nama depan   : ". $informatika->nama_saya."</br>"; 
echo "Nama belakang: ". $informatika->nama_mahasiswa; 