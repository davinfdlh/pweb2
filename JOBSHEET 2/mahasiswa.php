<?php

echo "Mahasiswa</br>";
class mahasiswa{

var $nama;
var $nim;
var $alamat;


function tampil_nama()
{
    return "Nama saya adalah Davin Fadilah";
}
function tampil_alamat()
{
    return "</br>Alamat saya di jalan sutoyo</br>";
}
}
$nama_mahasiswa = new mahasiswa();
echo $nama_mahasiswa->tampil_nama();

$alamat_mahasiswa = new mahasiswa();
echo $alamat_mahasiswa->tampil_alamat();

echo "</br>Dosen";
class dosen{

    var $nidn;
    var $nama;
    var $prodi;
 
    function tampil_nama()
    {
        return "</br>Nama saya Davin Fadilah";
    }
    function tampil_nidn()
    {
        return "</br>nidn saya 2202002";
    }
    function tampil_prodi()
    {
        return "</br>saya dari prodi Teknik Informatika";
    }
}
$nama_dosen = new dosen();
echo $nama_dosen->tampil_nama();
echo $nama_dosen->tampil_nidn();
echo $nama_dosen->tampil_prodi();