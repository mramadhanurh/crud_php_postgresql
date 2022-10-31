<?php 
require_once'../koneksi.php';
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$sql="insert into siswa(nis,nama,alamat) values('$nis','$nama','$alamat')";
$db->exec($sql);
header('location:index.php');
?>