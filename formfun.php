<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Berat Badan</title>
</head>
<body>
    <fieldset>
    <legend>Form</legend>
    <form action="" method="get">
    <label for="">Nama</label>
    <input type="text" name="nama" required>
    <label for="">Berat Badan</label>
    <input type="number" name="bb" required>
    <label for="">Tinggi Badan</label>
    <input type="number" name="tb" required>
    <br>
    <input type="submit" name="simpan" value="Simpan">
    </form>
    </fieldset>

    <?php
        if (isset($_GET['simpan'])) {
            $nama = $_GET['nama'];
            $bb = $_GET['bb'];
            $tb = $_GET['tb'];

            function TNI($tb, $bb){
                if ($tb < 165 && $bb < 60) {
                    return "Selamat Anda keterima";
                }else {
                    return "Maaf Anda tidak keterima";
                }
            }
            echo "Nama : $nama<br>";
            echo "Berat Badan : $bb<br>";
            echo "Tinggi Badan : $tb<br>";
            echo"" . TNI($tb, $bb);
        }
    ?>
</body>
</html>