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

        echo "No pendaftaran : $np<br>";
        echo "NISN           : $nisn<br>";
        echo "Nama           : $nama<br>";
        echo "Alamat         : $alamat<br>";
        echo "Tempat Lahir   : $tl<br>";
        echo "Tanggal Lahir  : $tal<br>";
        echo "Asal Sekolah   : $as<br>";
        echo "Jenis Kelamin  : $jk<br>";
        echo "Jurusan        : $jurusan<br>";
        echo "Nama Ayah      : $na<br>";
        echo "Pekerjaan Ayah : $pa<br>";
        echo "Nama Ibu       : $ni<br>";
        echo "Pekerjaan Ibu  : $pi<br>";
        echo "Agama          : $agama<br>";
        echo "Hobi           : $hobi<br>";
        if (isset($_POST['makan'])) {
            echo  $_POST['makan'] . "<br>";
        }
        if (isset($_POST['Tidur'])) {
            echo  $_POST['Tidur'] . "<br>";
        }
        if (isset($_POST['Minum'])) {
            echo  $_POST['Minum'] . "<br>";
        }
        if (isset($_POST['main hp'])) {
            echo  $_POST['main hp'] . "<br>"; 
        }
        if (isset($_POST['masak'])) {
            echo  $_POST['masak'] . "<br>";
        }

    }
?>