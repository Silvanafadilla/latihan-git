<?php
    if (isset($_POST['Kirim'])) {
        $nama = $_POST['nama'];
        $jalan = $_POST['jln'];
        $kec = $_POST['kec'];
        $desa = $_POST['desa'];
        $kode = $_POST['kode'];
        $namaba = $_POST['nb'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];

        echo "Nama : $nama<br>";
        echo "Jalan/Kp           : $jalan<br>";
        echo "Kecamatan           : $kec<br>";
        echo "Desa         : $desa<br>";
        echo "Kode   : $kode<br>";
        echo "Nama Barang  : $namaba<br>";
        echo "Harga Barang   : $harga<br>";
        echo "Jumlah Barang  : $jumlah<br>";
        echo "Deskripsi      : $deskripsi<br>";
        echo "Tanggal Pembelian : $tanggal<br>";

        if ($jumlah > 10) {
            $a = 0.2*$jumlah;
            // $i = $a-$harga;
            echo "Anda mendapatkan diskon 20% ";
        }elseif ($jumlah > 5) {
            $b = 0.1*$jumlah;
            // $j = $b-$harga;
            echo "Anda mendapatkan diskon 10%  ";
        }else {
            if ($jumlah <= 0) {
            echo "maaf yang anda masukan salah";

            }
        }
        }
        
        
    
?>