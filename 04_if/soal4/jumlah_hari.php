<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Hari dalam Bulan</title>
</head>
<body>
    <h1>JUMLAH HARI DALAM BULAN SAAT INI</h1>
    <?php
    // Mendapatkan bulan dan tahun saat ini
    $bulan_sekarang = date("n"); // n = bulan dalam angka (1-12)
    $tahun_sekarang = date("Y"); // Y = tahun 4 digit
    
    // Array nama bulan
    $nama_bulan = [
        1 => "Januari", 2 => "Februari", 3 => "Maret", 
        4 => "April", 5 => "Mei", 6 => "Juni",
        7 => "Juli", 8 => "Agustus", 9 => "September",
        10 => "Oktober", 11 => "November", 12 => "Desember"
    ];
    
    echo "<p>Bulan: " . $nama_bulan[$bulan_sekarang] . " $tahun_sekarang</p>";
    
    // Menentukan jumlah hari menggunakan SWITCH
    switch($bulan_sekarang) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $jumlah_hari = 31;
            break;
        case 4: case 6: case 9: case 11:
            $jumlah_hari = 30;
            break;
        case 2:
            // Cek tahun kabisat untuk bulan Februari
            if (($tahun_sekarang % 400 == 0) || 
                (($tahun_sekarang % 4 == 0) && ($tahun_sekarang % 100 != 0))) {
                $jumlah_hari = 29; // Tahun kabisat
            } else {
                $jumlah_hari = 28; // Bukan tahun kabisat
            }
            break;
        default:
            $jumlah_hari = 0;
    }
    
    echo "<h2>Jumlah hari: $jumlah_hari hari</h2>";
    
    // Informasi tambahan
    if ($bulan_sekarang == 2) {
        if ($jumlah_hari == 29) {
            echo "<p><em>Tahun $tahun_sekarang adalah tahun kabisat</em></p>";
        } else {
            echo "<p><em>Tahun $tahun_sekarang bukan tahun kabisat</em></p>";
        }
    }
    ?>
    <br>
    <a href="jumlah_hari.php">Refresh</a>
</body>
</html>