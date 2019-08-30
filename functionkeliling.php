<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keliling</title>
</head>
<body>
    <fieldset>
    <legend>Keliling</legend>
    <form action="" method="get">
    <label for="">jari Lingkaran</label>
    <input type="number" name="jari" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>

    <?php
        if (isset($_GET['simpan'])) {
            $j = $_GET['jari'];

            function jari_lingkaran($jari){
                $hasil = 3.14 * $jari * $jari;
                return $hasil;
            }
            function keliling($jari){
                $hsl = 3.14 * 2 * $jari;
                return $hsl;

            }
            $hasil = jari_lingkaran($j);
            $hsl = keliling($j);
            echo "Jari lingkaran : $hasil<br>";
            echo "Keliling : $hsl";

        

        }
    ?>
</body>
</html>