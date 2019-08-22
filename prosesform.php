<?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        echo "Nama          : $nama<br>";
        echo "Alamat        : $alamat<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "Agama         : $agama<br>";
        echo "Email         : $email<br>";
        if ($pass == "12345") {
            echo "<b>Status Aktif</b>";
        }else {
            echo "<b>Status tidak aktif</b>";
        
    }
}
?>