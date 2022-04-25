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
function nilai_akhir ($a,$b,$c) {
    return $a * 0.4 + $b * 0.3 + $c * 0.3;
    }
function status ($x){
    if ($x>60){
        $status = 'Lulus';
    }else{
        $status = 'tidak lulus';
    }
    return $status;
}
function grade ($x){
    if ($x>=85){
        $grade = 'A';
    }elseif ($x>=70){
        $grade = 'B';
    }elseif ($x>=60){
        $grade = "C";
    }elseif ($x>=50){
        $grade = 'D';
    }else{
        $grade = 'E';
    }
    return $grade;
}

if (isset($_POST['Input'])) {
$nim = $_POST['nim'];
$pildata = $_POST['pildata'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$akhir = nilai_akhir($tugas,$uts,$uas);
$grade = grade($akhir);
$status= status($akhir);


echo "Program Studi : <b>$pildata</b><br>\n";
echo "NIM           : <b>$nim</b><br>\n";
echo "Nilai Akhir   : <b>$grade</b><br>\n";
echo "Status        : <b>$status</b><br>\n";
echo "Catatan Kusus : ";
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