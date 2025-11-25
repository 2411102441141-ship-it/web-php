<!DOCTYPE html>
<html>
    <head>
        <title>Pasangan x + y + z = 25</title>
    </head>
    <body>
        <h1>PASANGAN NILAI x, y, z YANG MEMENUHI x + y + z = 25</h1>
        <?php
        $jumlah_penyelesaian = 0;
    
    // Nilai minimum untuk setiap variabel adalah 1 (bilangan asli)
    // Nilai maksimum untuk setiap variabel adalah 23 (karena jika satu variabel = 1, dua lainnya maksimal 23)
    
    for ($x = 1; $x <= 23; $x++) {
        for ($y = 1; $y <= 23; $y++) {
            for ($z = 1; $z <= 23; $z++) {
                if ($x + $y + $z == 25) {
                    echo "x = $x, y = $y, z = $z<br>";
                    $jumlah_penyelesaian++;
                }
            }
        }
    }
    
    echo "<h2>Jumlah penyelesaian : $jumlah_penyelesaian</h2>";
        ?>
    </body>
</html>