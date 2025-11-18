<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
</head>
<body>
<h2>Hitung Upah Berdasarkan Golongan</h2>

<form method="post">
    Jam Kerja : <input type="number" name="jam" required><br><br>
    Golongan :
    <select name="gol" required>
        <option value="A">A (Rp.4.000)</option>
        <option value="B">B (Rp.5.000)</option>
        <option value="C">C (Rp.6.000)</option>
        <option value="D">D (Rp.7.500)</option>
    </select>
    <br><br>
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php
if(isset($_POST['hitung'])){
    $jam = $_POST['jam'];
    $gol = $_POST['gol'];

    switch($gol){
        case "A": $perJam = 4000; break;
        case "B": $perJam = 5000; break;
        case "C": $perJam = 6000; break;
        case "D": $perJam = 7500; break;
    }

    $lembur = 3000;

    if($jam > 48){
        $jamLembur = $jam - 48;
        $total = (48 * $perJam) + ($jamLembur * $lembur);
    } else {
        $total = $jam * $perJam;
    }

    echo "<p>Golongan: $gol</p>";
    echo "<p>Total Upah: Rp ".number_format($total,0,',','.')."</p>";
}
?>
<br><a href="index.php">⬅ Kembali ke Menu</a>
</body>
</html>
    