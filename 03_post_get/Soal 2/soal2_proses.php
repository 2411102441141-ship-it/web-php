<?php
$jumlahUang = $_POST['jumlah_uang'];

$sa = floor($jumlahUang / 100000);
$sisa = $jumlahUang % 100000;

$sb = floor($sisa / 50000);
$sisa = $sisa % 50000;

$sc = floor($sisa / 20000);
$sisa = $sisa % 20000;

$sd = floor($sisa / 5000);
$sisa = $sisa % 5000;

$se = floor($sisa / 100);
$sisa = $sisa % 100;

$sf = floor($sisa / 50);
?>
<html>
    <head>
        <title>Hasil Konversi Pecahan</title>
    </head>
    <body>
        <h1>Hasil Konversi Pecahan Uang</h1>
        <p>Jumlah Uang: Rp. <?php echo number_format($jumlahUang, 0, ',', '.'); ?></p>
        <p>Jumlah Rp. 100.000 : <?php echo $sa; ?></p>
        <p>Jumlah Rp. 50.000 : <?php echo $sb; ?></p>
        <p>Jumlah Rp. 20.000 : <?php echo $sc; ?></p>
        <p>Jumlah Rp. 5.000 : <?php echo $sd; ?></p>
        <p>Jumlah Rp. 100 : <?php echo $se; ?></p>
        <p>Jumlah Rp. 50 : <?php echo $sf; ?></p>
    </body>
</html>