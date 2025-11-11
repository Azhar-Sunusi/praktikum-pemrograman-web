<?php
$jumlah = $_POST['jumlah'];

$pecahan = [100000, 50000, 20000, 5000, 100, 50];
$sisa = $jumlah;

?>

<html>
<head>
    <title>Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Pecahan Uang</h1>
    <p>Jumlah uang yang dimasukkan: Rp <?= number_format($jumlah, 0, ',', '.') ?></p>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Pecahan</th>
            <th>Jumlah Lembar/Keping</th>
        </tr>
        <?php
        foreach ($pecahan as $p) {
            $lembar = floor($sisa / $p);
            $sisa = $sisa % $p;
            echo "<tr>
                    <td>Rp " . number_format($p, 0, ',', '.') . "</td>
                    <td>" . $lembar . "</td>
                  </tr>";
        }
        ?>
    </table>
    <p><b>Sisa uang yang tidak terpecah: Rp <?= number_format($sisa, 0, ',', '.') ?></b></p>
</body>
</html>