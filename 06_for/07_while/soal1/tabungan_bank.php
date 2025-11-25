<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Simulasi Tabungan</title>
    </head>
    <body>
        <h1>HASIL SIMULASI TABUNGAN</h1>
        <?php
        $saldo = $_POST['saldo_awal'];
        $bulan = $_POST['bulan'];
    
        echo "<p>Saldo awal: Rp " . number_format($saldo, 0, ',', '.') . "</p>";
        echo "<p>Jangka waktu: $bulan bulan</p>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Bulan</th><th>Saldo Awal</th><th>Bunga</th><th>Admin</th><th>Saldo Akhir</th></tr>";
        
        for ($i = 1; $i <= $bulan; $i++) {
            $saldo_awal_bulan = $saldo;
            
            if ($saldo < 1100000) {
                $bunga = $saldo * 0.03 / 12;  // 3% p.a

            } else {
                $bunga = $saldo * 0.04 / 12;  // 4% p.a
                }
        
        
                $admin = 9000;
                $saldo = $saldo + $bunga - $admin;
        
       
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>Rp " . number_format($saldo_awal_bulan, 0, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($bunga, 0, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($admin, 0, ',', '.') . "</td>";
                echo "<td>Rp " . number_format($saldo, 0, ',', '.') . "</td>";
                echo "</tr>";
            }
    
   
            echo "</table>";
            echo "<h3>Saldo akhir setelah $bulan bulan: Rp " . number_format($saldo, 0, ',', '.') . "</h3>";
            ?>
            <br>
            <a href="tabungan_bank.html">Kembali</a>
    </body>
</html>