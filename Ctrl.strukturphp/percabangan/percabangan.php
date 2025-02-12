<?php
//Percabangan 1 Kondisi dengan Statement IF
    $x = 20; //hanya bilangan kelipatan 5 yang akan muncul pada halaman
    if($x % 5 ==0)
        echo "Bilangan $x adalah kelipatan 5"; 

//Percabangan 2 Kondisi dengan Statement IF...ELSE
    $x = 75;
    if($x % 2 ==0) echo "$x adalah bilangan genap";
    else echo "$x adalah bilangan ganjil";

//Percabangan Banyak Kondisi dengan Statement if .. else if... else
    $X = 100;
    $y = 95;

    $rata = ($x + $y) / 2;
    if($rata >= 0 && $rata <75){
        echo "Maaf anda Tidak Lulus";
    }

    else if($rata >=75 && $rata <=100){
        echo "Anda Tidak Lulus";
    }

    else{
        echo "Maaf Nilai yang anda inputkan salah";
    }

//Percabangan Banyak kondisi dengan Statement switch
    switch($variabel) {
    case nilai1 :
        perintah_jika_nilai1;
        break;
    case nilai2 :
        perintah_jika_nilai2;
        break;
    [default :
        perintah_untuk_nilai_default;
    ]
    }


?>
