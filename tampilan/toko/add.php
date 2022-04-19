<h2>Tambah Data toko</h2>
<form method="POST" action="proses/toko/save.php"
enctype="multipart/form-data">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>kode_barang</td>
<td><input type="text" name="kode_barang"></td>
</tr>
<tr>
<td>Logo</td>
<td><input type="file" name="logo"></td>
</tr>
<tr>
<td></td>
<td><button type="submit">Simpan</button></td>
</tr>
</table>
</form>