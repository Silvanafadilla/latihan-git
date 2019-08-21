<?php
    
    $nama = "sisil";
    $kls = "XI RPL 1";
    $a = 80;
    $b = 70;
    $rata = $a+$b;
    $hasil = $rata/2;
    $ket = "lulus";

    echo "Nama : $nama<br>";
    echo "Kelas : $kls<br>";
    echo "Nilai B.Indonesia : $a<br>";
    echo "Nilai Matematika : $b<br>";
    echo "Nilai Rata - rata : $hasil<br>";
    if ($hasil >= 85) {
        echo "Grad A<br>";
    }elseif ($hasil >= 75) {
        echo "Grad B<br>";
    }elseif ($hasil >= 60) {
        echo "Grad C<br>";
    }elseif ($hasil < 60) {
        echo "Grad D<br>";
    

    }else {
        echo "maaf nomor yang anda masukan salah<br>";
    }
 
?>