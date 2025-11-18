<!DOCTYPE html>
<html>
<head>
    <title>Soal 4</title>
</head>
<body>
<h2>Cek Jumlah Hari Dalam Bulan</h2>

<form method="post">
    Pilih Bulan :
    <select name="bulan" required>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>
    <input type="submit" name="cek" value="Cek">
</form>

<?php
if(isset($_POST['cek'])){
    $bulan = $_POST['bulan'];

    switch($bulan){
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $hari = 31; break;
        case 4: case 6: case 9: case 11:
            $hari = 30; break;
        case 2:
            $hari = "28 atau 29"; break;
    }

    echo "<p>Jumlah hari: $hari hari</p>";
}
?>
<br><a href="index.php">⬅ Kembali ke Menu</a>
</body>
</html>
