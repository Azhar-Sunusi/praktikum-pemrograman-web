<?php
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$sekolah = $_POST['sekolah'];
$nilai = $_POST['nilai'];
?>

<html>
<head>
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <h1>Hasil Form Pendaftaran</h1>

    <p>Terima kasih <b><?= $nama; ?></b> sudah mengisi form pendaftaran.</p>

    <table border="0" cellpadding="5">
        <tr><td>Nama Lengkap</td><td>: <?= $nama; ?></td></tr>
        <tr><td>Tempat Lahir</td><td>: <?= $tempat; ?></td></tr>
        <tr><td>Tanggal Lahir</td><td>: <?= $tgl . " - " . $bln . " - " . $thn; ?></td></tr>
        <tr><td>Alamat Rumah</td><td>: <?= $alamat; ?></td></tr>
        <tr><td>Jenis Kelamin</td><td>: <?= $jk; ?></td></tr>
        <tr><td>Asal Sekolah</td><td>: <?= $sekolah; ?></td></tr>
        <tr><td>Nilai UAN</td><td>: <?= $nilai; ?></td></tr>
    </table>
</body>
</html>