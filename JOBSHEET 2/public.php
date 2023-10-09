<?php

use mahasiswa as GlobalMahasiswa;

class mahasiswa{
    public $nama;
    private $nim=220302031;
    
    public function tampil_nama(){
        return "Nama saya Davin Fadilah</br>";
    }
    function tampil_nim(){
        return "NIM saya ".$this->nim;
    }  
}
$mahasiswa = new mahasiswa();
echo $mahasiswa->tampil_nama();
echo $mahasiswa->tampil_nim();