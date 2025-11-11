<?php
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$nilai_uan = $_POST['nilai_uan'];
?>
<html>
    <head>
        <title>Konfirmasi Pendaftaran</title>
    </head>
    <body>
        <h1>Konfirmasi Pendaftaran</h1>
        <p>Terimakasih <strong><?php echo $nama; ?></strong> sudah mengisi form pendaftaran.</p>
        <table border="1">
            <tr><td>Nama Lengkap</td><td><?php echo $nama; ?></td></tr>
            <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
            <tr><td>Tanggal Lahir</td><td><?php echo $tanggal.'-'.$bulan.'-'.$tahun; ?></td></tr>
            <tr><td>Alamat Rumah</td><td><?php echo $alamat; ?></td></tr>
            <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
            <tr><td>Asal Sekolah</td><td><?php echo $asal_sekolah; ?></td></tr>
            <tr><td>Nilai UAN</td><td><?php echo $nilai_uan; ?></td></tr>
        </table>
    </body>
</html>