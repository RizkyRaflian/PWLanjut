<?php
$nim = "A11.2020.12916";
$nama = 'Rizky Raflian';
$umur = 20;
$nilai = 85;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>