<?php
class manusia{
    private $nama_saya="Davin";

    function panggil_nama($saya)
    {
       return "Nama depan   : ". $this->nama_saya."</br>"; 
    }
}
class mahasiswa extends manusia
{
    protected $nama_mahasiswa="Fadilah";
    function panggil_mahasiswa($mahasiswa)
    {
        return "Nama belakang : ".$this->nama_mahasiswa;
    }
}
$informatika = new mahasiswa();

echo $informatika->panggil_nama("Davin");
echo $informatika->panggil_mahasiswa("Fadilah");
//$informatika->panggil_mahasiswa("Fadilah");

//echo "Nama depan   : ". $informatika->nama_saya."</br>"; 
//echo "Nama belakang: ". $informatika->nama_mahasiswa; 