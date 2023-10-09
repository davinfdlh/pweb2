<?php


class mahasiswa{

var $nama;
var $nim;
var $alamat;

function __construct()
{
    echo "Saya mahasiswa Teknik Informatika</br>";
}
function __destruct()
{
    echo "Politeknik Negeri Cilacap";
}
function tampil_nama()
{
    return "Nama saya adalah Davin Fadilah</br>";
}
function tampil_alamat()
{
    return "Alamat saya di jalan sutoyo</br>";
}
function tampil_mahasiswa()
{
    return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah</br>";
}
}
$nama_mahasiswa = new mahasiswa();
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_alamat();
echo $nama_mahasiswa->tampil_mahasiswa();

