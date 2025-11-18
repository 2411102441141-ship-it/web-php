<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Cek Tahun Kabisat</title>
    </head>
    <body>
        <h1>HASIL CEK TAHUN KABISAT</h1>
        <?php
        $tahun = $_POST['tahun'];

// Logika tahun kabisat:
// - Tahun kabisat adalah tahun yang habis dibagi 4
// - Kecuali jika tahun tersebut habis dibagi 100, maka bukan kabisat
// - Kecuali jika tahun tersebut habis dibagi 400, maka kabisat

if ($tahun % 400 == 0) {
    echo "<p>Tahun $tahun adalah TAHUN KABISAT</p>";
    } else if ($tahun % 100 == 0) {
        echo "<p>Tahun $tahun BUKAN tahun kabisat</p>";
    } else if ($tahun % 4 == 0) {
        echo "<p>Tahun $tahun adalah TAHUN KABISAT</p>";
    } else {
        echo "<p>Tahun $tahun BUKAN tahun kabisat</p>";
    }
        ?>
        <br>
        <a href="tahun_kabisat.html">Kembali</a>
    </body>
</html>