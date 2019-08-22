<?php
    if (isset($_POST['pilih'])) {
        $jk = $_POST['jurusan'];
        echo "Jurusan anda adalah <b><font color='red'>$jk</font></b>";
    }
?>