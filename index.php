<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        <?php

        //VARIABEL
        $jumlahProyek=3;
        //$totalPendapatan;
        //$gajiBersih;

        // CONSTANTA
        define('gajiPokok',5000000);
        define('bonus',500000);
        define('pajakPenghasilan',0.12);

        $jumlahProyek *= bonus;
        $totalPendapatan = gajiPokok + $jumlahProyek;
        $gajiBersih = $totalPendapatan - ($totalPendapatan * pajakPenghasilan);

        echo "bonus anda adalah ".number_format($jumlahProyek, 0, ',', '.')."<br/>";
        echo "total pendapatan anda setelah ditambah bonus adalah ".number_format($totalPendapatan, 0,',','.')."<br/>";
        echo "gaji bersih anda adalah ".number_format($gajiBersih, 0, ',', '.')."<br/>";


        ?>
    </h3>
</body>
</html>