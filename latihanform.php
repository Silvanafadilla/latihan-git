<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat form Register</title>
</head>
<body>
    <form action="prosesform.php" name="input" method="POST">
    Nama          : <input type="text" name="nama"><br>
    Alamat        : <textarea name="alamat" id="" cols="15" rows="3"></textarea> <br>
    Jenis Kelamin : <label> <input type="radio" name="jk" value="perempuan">Perempuan</label>
                    <label> <input type="radio" name="jk" value="Laki-laki">Laki-laki</label><br>
    Agama         : <select name="agama" id=""><option>Islam</option>
            <option>Kristen</option>
            <option>Protestan</option></select><br>
    Email         : <input type="text" name="email"><br>
    Password      : <input type="password" name="password"><br>
    <input type="submit" name="input" value="input">
    <input type="submit" name="hapus" value="hapus">
    </form>
</body>
</html>