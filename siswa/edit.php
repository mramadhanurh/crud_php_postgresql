<?php 
require_once'../koneksi.php';
$nis=$_GET['nis'];
$query=$db->query("select * from siswa where nis='$nis'");
$query->execute();
$data=$query->fetch();


?>
<form action="update.php" method="POST">
    Nis : <input type="text" name="nis" value="<?php echo $data['nis'] ?>">
    <br>
    Nama : <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
    <br>
    Alamat : <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
    <br>
    <button name="simpan">Simpan</button>
</form>