<?php
include '../../conf.php';
include '../../conn.php';
$nama = post('nama');
$kode_barang = post('kode_barang');
$logo = "";
if($_FILES['logo']['tmp_name']!=""){
$tmp_logo = $_FILES['logo']['tmp_name'];
$logo = $_FILES['logo']['name'];
move_uploaded_file($tmp_logo, "../../assets/foto/".$logo);
}
$simpan = $koneksi->prepare("INSERT INTO toko
(`nama`,`kode_barang`,`logo`) VALUES
('".$nama."','".$kode_barang."','".$logo."')");
$simpan->execute();
header("location:../../index.php?p=toko");
?>
