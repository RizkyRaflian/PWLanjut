<?php
include '../../conf.php';
include '../../conn.php';
$id = post('id');
$nama = post('nama');
$kode_barang = post('kode_barang');
$update_logo = "";
if($_FILES['logo']['tmp_name']!=""){
$tmp_logo = $_FILES['logo']['tmp_name'];
$logo = $_FILES['logo']['name'];
move_uploaded_file($tmp_logo, "../../assets/foto/".$logo);
$update_logo = ",`logo`='".$logo."'";
}
$simpan = $koneksi->prepare("UPDATE toko SET
`nama`='".$nama."',
`kode_barang`='".$kode_barang."'
".$update_logo."
WHERE
`id` ='".$id."'");
$simpan->execute();
header("location:../../index.php?p=toko");
?>