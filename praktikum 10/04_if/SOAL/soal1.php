<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
</head>
<body>
<h2>Cek Tahun Kabisat</h2>

<form method="post">
    Masukkan Tahun : <input type="number" name="tahun" required>
    <input type="submit" name="cek" value="Cek">
</form>

<?php
if(isset($_POST['cek'])){
    $tahun = $_POST['tahun'];
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0)
        echo "<p>$tahun adalah Tahun Kabisat</p>";
    else
        echo "<p>$tahun BUKAN Tahun Kabisat</p>";
}
?>
<br><a href="index.php">⬅ Kembali ke Menu</a>
</body>
</html>
