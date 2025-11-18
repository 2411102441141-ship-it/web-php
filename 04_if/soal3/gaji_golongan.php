<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Gaji Golongan</title>
</head>
<body>
    <h1>HASIL PERHITUNGAN GAJI GOLONGAN</h1>
    <?php
    $jam_kerja = $_POST['jam_kerja'];
    $golongan = $_POST['golongan'];
    $upah_lembur_per_jam = 3000;
    $jam_normal = 48;
    
    // Menentukan upah per jam berdasarkan golongan menggunakan SWITCH
    switch($golongan) {
        case 'A':
            $upah_per_jam = 4000;
            $keterangan_golongan = "A - Rp 4.000/jam";
            break;
        case 'B':
            $upah_per_jam = 5000;
            $keterangan_golongan = "B - Rp 5.000/jam";
            break;
        case 'C':
            $upah_per_jam = 6000;
            $keterangan_golongan = "C - Rp 6.000/jam";
            break;
        case 'D':
            $upah_per_jam = 7500;
            $keterangan_golongan = "D - Rp 7.500/jam";
            break;
        default:
            $upah_per_jam = 0;
            $keterangan_golongan = "Tidak diketahui";
    }
    
    echo "<p>Golongan: $keterangan_golongan</p>";
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
    <a href="gaji_golongan.html">Kembali</a>
</body>
</html>