<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Perhitungan Gaji</title>
    </head>
    <body>
        <h1>HASIL PERHITUNGAN GAJI</h1>
        
        <?php
        $jam_kerja = $_POST['jam_kerja'];
        $upah_per_jam = 2000;
        $upah_lembur_per_jam = 3000;   
        $jam_normal = 48;
    
        echo "<p>Jumlah jam kerja: $jam_kerja jam</p>";
        echo "<p>Upah per jam: Rp " . number_format($upah_per_jam, 0, ',', '.') . "</p>";
        echo "<p>Upah lembur per jam: Rp " . number_format($upah_lembur_per_jam, 0, ',', '.') . "</p>";
    
        if ($jam_kerja <= $jam_normal) {
        // Tidak ada lembur
        $gaji = $jam_kerja * $upah_per_jam;
        echo "<p>Status: Tidak ada lembur</p>";
    } else {
        // Ada lembur
        $jam_lembur = $jam_kerja - $jam_normal;
        $gaji_normal = $jam_normal * $upah_per_jam;
        $gaji_lembur = $jam_lembur * $upah_lembur_per_jam;
        $gaji = $gaji_normal + $gaji_lembur;
        
        echo "<p>Jam normal: $jam_normal jam</p>";
        echo "<p>Jam lembur: $jam_lembur jam</p>";
        echo "<p>Gaji normal: Rp " . number_format($gaji_normal, 0, ',', '.') . "</p>";
        echo "<p>Gaji lembur: Rp " . number_format($gaji_lembur, 0, ',', '.') . "</p>";
    }
    
    echo "<h2>Total Gaji: Rp " . number_format($gaji, 0, ',', '.') . "</h2>";
        ?>
        <br>
        <a href="gaji_karyawan.html">Kembali</a>
    </body>
</html>