<?php
$saldoAwal = $_POST['saldo_awal'];
$bunga = $_POST['bunga'] / 100;
$bulan = $_POST['bulan'];
$saldoAkhir = $saldoAwal * pow(1 + $bunga, $bulan);
?>
<html>
    <head>
        <title>Hasil Perhitungan Bunga</title>
    </head>
    <body>
         <h1>Hasil Perhitungan Bunga Tabungan</h1>
         <p>Saldo Awal: Rp. <?php echo number_format($saldoAwal, 2, ',', '.'); ?></p>
         <p>Bunga per Bulan: <?php echo $_POST['bunga']; ?>%</p>
         <p>Lama Menabung: <?php echo $bulan; ?> bulan</p>
         <p>Saldo Akhir: Rp. <?php echo number_format($saldoAkhir, 2, ',', '.'); ?></p>
        </body>
</html>