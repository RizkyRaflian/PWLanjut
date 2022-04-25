<html>
<head>
    <title>Pengolahan Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
<fieldset>
    <section>
        <div class="left">
            <p>NIM</p>
            <p>Program Studi</p><br>
            <p>Nilai Tugas</p>
            <p>Nilai UTS</p>
            <p>Nilai UAS</p>
            <p>Catatan Khusus</p>
        </div>
        <div class="right">
            <input type="text" id="nim" name="nim"><br><br>
            <select name="pildata">
                <option value="">Pilih Data</option>
                <option value="Teknik Informatika S1">A11</option>
                <option value="Sistem Informasi S1">A12</option>
                <option value="Teknik Informatika D3">A22</option>
            </select><br><br>
            <input type="number" id="tugas" name="tugas" min="0" max="100"><br><br>
            <input type="number" id="uts" name="uts" min="0" max="100"><br><br>
            <input type="number" id="uas" name="uas" min="0" max="100"><br><br>
            <input type="checkbox" name="check01" value="kehadiran" >Kehadiran >= 70%<br>
            <input type="checkbox" name="check02" value="interaktif">interaktif di kelas<br>
            <input type="checkbox" name="check03" value="tepattugas">Tidak terlambat mengumpulkan tugas<br>            
    </section>
</fieldset> 
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nim = $_POST['nim'];
$pildata = $_POST['pildata'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $tugas * 0.4;
$uts   = $uts * 0.3;
$uas   = $uas * 0.3;
$akhir = $tugas + $uts + $uas;
if ($akhir>=85)
{
$grade = 'A';
}
elseif ($akhir>=70)
{
$grade = 'B';
}
elseif ($akhir>=60)
{
$grade = "C";
}
elseif ($akhir>=50)
{
$grade = 'D';
}
else
{
$grade = 'E';
}
if ($akhir>60)
{
$status = 'Lulus';
}
echo "Program Studi : <b>$pildata</b>\n";
echo "NIM           : <b>$nim</b>\n";
echo "Nilai Akhir   : <b>$grade</b>\n";
echo "Status        : <b>$status</b>\n";
echo "Catatan Kusus : <b>$status</b>\n";
if (isset($_POST['check01'])) {
echo "+ " . $_POST['check01'] . "<br>";
}
if (isset($_POST['check02'])) {
echo "+ " . $_POST['check02'] . "<br>";
}
if (isset($_POST['check03'])) {
echo "+ " . $_POST['check03'] . "<br>";
}
}
?>