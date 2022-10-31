<?php 
require_once'../koneksi.php';
$query=$db->query("select * from siswa");
$query->execute();
$data=$query->fetchAll();
?>

<h1>Data Siswa</h1>

<a href="input.php"> Tambah Data</a>
<table border="1">
    <tr>
        <td>Nis</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    <?php 
    foreach($data as $value) { ?>
    <tr>
        <td><?php echo $value['nis'] ?></td>
        <td><?php echo $value['nama'] ?></td>
        <td><?php echo $value['alamat'] ?></td>
        <td>
            <a href="hapus.php?nis=<?php echo $value['nis'] ?>">Hapus</a>
            <a href="edit.php?nis=<?php echo $value['nis'] ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>