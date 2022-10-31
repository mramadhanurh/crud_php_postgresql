<?php 
require_once'../koneksi.php';
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$sql="update siswa set nama='$nama',alamat='$alamat' where nis='$nis'";
$db->exec($sql);
header('location:index.php');
?>