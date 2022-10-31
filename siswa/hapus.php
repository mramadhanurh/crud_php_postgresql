<?php 
require_once'../koneksi.php';
$sql="delete from siswa where nis='" . $_GET['nis'] . "'";
$db->exec($sql);
header('location:index.php');
?>