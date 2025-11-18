<!DOCTYPE html>
<html>
<head>
    <title>Soal 2</title>
</head>
<body>
<h2>Hitung Upah Mingguan</h2>

<form method="post">
    Jam Kerja Minggu Ini : <input type="number" name="jam" required>
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php
if(isset($_POST['hitung'])){
    $jam = $_POST['jam'];
    $upahNormal = 2000;
    $upahLembur = 3000;

    if($jam > 48){
        $lembur = $jam - 48;
        $total = (48 * $upahNormal) + ($lembur * $upahLembur);
    } else {
        $total = $jam * $upahNormal;
    }

    echo "<p>Total Upah : Rp " . number_format($total,0,',','.') . "</p>";
}
?>
<br><a href="index.php">⬅ Kembali ke Menu</a>
</body>
</html>
