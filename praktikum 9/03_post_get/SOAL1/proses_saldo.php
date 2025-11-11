<?php
// Ambil data dari form
$saldo_awal = $_POST['saldo_awal'];
$bunga = $_POST['bunga'];
$bulan = $_POST['bulan'];

// Proses perhitungan bunga majemuk
$saldo_akhir = $saldo_awal * pow((1 + ($bunga / 100)), $bulan);
?>

<html>
<head>
    <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>
    <?php
    echo "<p>Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "</p>";
    echo "<p>Bunga Perbulan: " . $bunga . " %</p>";
    echo "<p>Lama Menabung: " . $bulan . " bulan</p>";
    echo "<p><strong>Saldo Akhir: Rp " . number_format($saldo_akhir, 0, ',', '.') . "</strong></p>";
    ?>
</body>
</html>
