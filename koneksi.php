<?php

// konfigurasi koneksi
$host       =  "localhost";
$dbuser     =  "postgres";
$dbpass     =  "123123123";
$port       =  "5432";
$dbname    =  "sekolah";

// script koneksi php postgree
$db = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass); 

if($db)
{
    //echo "Koneksi Berhasil";
}else
{
    echo "Gagal melakukan Koneksi";
}
?>