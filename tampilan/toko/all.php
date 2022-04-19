<?php
$addonq = '';
if(get("q")!=""){ $addonq = " WHERE nama LIKE
'%".get('q')."%'"; }
$hasil = $koneksi->prepare("SELECT * FROM toko
".$addonq." ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();
?>
<a class="btn pull-right" href="index.php?p=toko&m=add">Tambah
Baru</a>
<h2>Data toko</h2>
<div style="clear:both;width:200px;margin-right:12px;"
class="pull-right">
<form action="index.php?p=toko&m=search">
<input autocomplete="off" type="hidden" name="p"
value="toko">
<input autocomplete="off" type="text" name="q"
placeHolder="Type and enter to search" value="<?php echo
(get("q"));?>">
</form>
</div>
<div><?php echo get('q')!=""?"hasil pencarian untuk
'".(get('q'))."'":"";?></div>
<div style="clear:both">&nbsp;</div>
<table class="data">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Logo</th>
<th colspan="4">Action</th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
foreach ($data as $key) {
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $key['nama'];?></td>
<td><?php echo $key['kode_barang'];?></td>
<td><img class="img-mini" src="assets/foto/<?php echo
$key['logo'];?>"></td>
<td><a target="_blank"
href="proses/toko/pdf.php?id=<?php echo
$key['id'];?>">PDF</a></td>
<td><a href="proses/toko/download.php?id=<?php echo
$key['id'];?>">Download</a></td>
<td><a href="index.php?p=toko&m=edit&id=<?php echo
$key['id'];?>">Ubah</a></td>
<td><a onclick="return confirm('Hapus Data<?php echo
$key['nama'];?>')" <a href="proses/toko/hapus.php?id=<?php
echo $key['id'];?>">Hapus</a></td>
</tr>
<?php
$i++;
} ?>
</tbody>
</table>