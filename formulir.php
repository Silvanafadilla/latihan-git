<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="POST" name="input">
    <h2>FORMULIR</h2>
    No Pendaftaran <input type="number" name"np"><br>
    NISN           <input type="number" name"nisn"><br>
    Nama           <input type="text" name"nama"><br>
    Alamat         <textarea name="alamat" cols="15" rows="3"></textarea><br>
    Tempat Lahir   <input type="text" name"tl"><br>
    Tanggal Lahir  <input type="date" name="tal"><br>
    Asal Sekolah   <input type="text" name="as"><br>
    Jenis Kelamin  <input type="radio" name="jk" value="perempuan">Perempuan
                   <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
    Jurusan        <select name="jurusan">
                   <option value="RPL">Rekayasa Perangkat Lunak</option>
                   <option value="TKR">Teknik Kendara Ringan</option>
                   <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
                   </select><br>
    Nama Ayah      <input type="text" name="na"><br>
    Pekerjaan Ayah <input type="text" name="pa"><br>
    Nama Ibu       <input type="text" name="ni"><br>
    Pekerjaan Ibu  <input type="text" name="pi"><br>
    Agama          <select name="agama">
                   <option value="Islam">Islam</option></option>
                   <option value="Kristen">Kristen</option>
                   <option value="Hindu">Hindu</option>
                   </select><br>
    Hobi           <input type="checkbox" name="makan" value="makan"checked> makan<br>
                   <input type="checkbox" name="Tidur" value="Tidur"> Tidur<br>
                   <input type="checkbox" name="Minum" value="minum">minum<br>
                   <input type="checkbox" name="main hp" value="main hp">main hp<br>
                   <input type="submit" name="simpan" value="simpan">
                   <input type="submit" name="hapus" value="hapus">
    </form>
</body>
</html>