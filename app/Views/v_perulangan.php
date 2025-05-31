<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Perulangan</title>
</head>
<body>
    <h1>Perulangan For</h1>
    <?php
        for($i = 0; $i < 10; $i++){
            echo "<h2>Ini perulangan ke-$i</h2>";
        }            
    ?>
    <hr>
    <h1>Perulangan While</h1>
    <?php
        $ulangi = 0;

        while($ulangi < 10){
            echo "<p>Ini adalah perulangan ke-$ulangi</p>";
            $ulangi++;
        }
    ?>
    <hr>
    <h1>Perulangan Do/While</h1>
    <?php
        $ulangi = 10;

        do {
            echo "<p>ini adalah perulangan ke-$ulangi</p>";
            $ulangi--;
        } while ($ulangi > 0);
    ?>
    <hr>
    <h1>Perulangan Foreach</h1>
    <?php
        $matakuliah = [
            "Pengembangan Aplikasi Mobile ",
            "Aplikasi Berorientasi Service",
            "Pengembangan Aplikasi Web",
            "Pengembangan Aplikasi Desktop"
            ];

            echo "<h5>Nama Mata Kuliah:</h5>";
            echo "<ul>";
            foreach($matakuliah as $matkul){
                echo "<li>$matkul</li>";
            }
            echo "</ul>";
    ?>
</body>
</html>