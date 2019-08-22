<?php
    if (isset($_POST['simpan'])) {
        $np = $_POST['np'];
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tl = $_POST['tl'];
        $tal = $_POST['tal'];
        $as = $_POST['as'];
        $jk = $_POST['jk'];
        $jurusan = $_POST['jurusan'];
        $na = $_POST['na'];
        $pa = $_POST['pa'];
        $ni = $_POST['ni'];
        $pi = $_POST['pi'];
        $agama = $_POST['agama'];
        $hobi = $_POST['hobi'];

        echo "No pendaftaran : $np";
        echo "NISN : $nisn";
        echo "Nama : $nama";
        echo "Alamat : $alamat";
        echo "Tempat Lahir : $tl";
        echo "Tanggal Lahir : $tal";
        echo "Asal Sekolah : $as";
        echo "Jenis Kelamin : $jk";
        echo "Jurusan : $jurusan";
        echo "Nama Ayah : $na";
        echo "Pekerjaan Ayah : $pa";
        echo "Nama Ibu : $ni";
        echo "Pekerjaan Ibu : $pi";
        echo "Agama : $agama";
        echo "Hobi : $hobi";


    }
?>