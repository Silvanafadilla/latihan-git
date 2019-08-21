<html>
<head>
    <title>Latihan Form</title>
    
</head>
<body>
<form action="" method="POST" name="input">
        Nama : <input type="text" name="nama"><br>
        Nilai 1 : <input type="text" name="nilai1"><br>
        Nilai 2 : <input type="text" name="nilai2"><br>
        <input type="submit" name="input" value="simpan">
        <input type="submit" name="input" value="hapus">
    </form>
</body>
</html>

<?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $hasil = $nilai1+$nilai2;
        $jm = $hasil/2;
        echo "Nama Anda : <b>$nama</b><br>";
        echo "Nilai 1 : <b>$nilai1</b><br>";
        echo "Nilai 2 : <b>$nilai2</b><br>";
        echo "Nilai Rata-rata : <b>$jm</b>";
    }
  
?>