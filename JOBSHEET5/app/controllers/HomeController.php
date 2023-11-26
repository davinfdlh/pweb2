<?php
class HomeController
{
    public function home()
    {
        header("location:http://localhost/app/index.php");
    }
    public function mahasiswa()
    {
        header("location:http://localhost/app/views/mahasiswa/index.php");
    }
}