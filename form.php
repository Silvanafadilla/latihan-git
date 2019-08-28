<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Form</title>
</head>
<body>
<fieldset valign="center">
    <form action="prosesform2.php" method="POST">
    <table>
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
    </tr>

    <tr>
    <td>Alamat : </td>
    <tr>
    <td>Jalan/Kp</td>
    <td><input type="text" name="jln"></td></tr>
    <td>Kecamatan</td>
    <td><input type="text" name="kec"></td>
    <tr>
    <td>Desa</td>
    <td><input type="text" name="desa"></td></tr>
    <td>Kode Pos</td>
    <td><input type="text" name="kode"></td>
    </tr>

    <tr>
    <td>Nama Barang</td>
    <td><input type="text" name="nb"></td>
    </tr>

    <tr>
    <td>Harga Barang</td>
    <td><input type="number" name="harga"></td>
    </tr>

    <tr>
    <td>Jumlah Barang</td>
    <td><input type="number" name="jumlah"></td>
    </tr>

    <tr>
    <td>Deskripsi</td>
    <td><input type="textarea" name="deskripsi"></td>
    </tr>

    <tr>
    <td>Tanggal Pembelian</td>
    <td><input type="date" name="tanggal"></td>
    </tr>

    <tr>
    <td><input type="submit" name="Kirim" value="Kirim">
    <input type="submit" name="Hapus" value="Hapus"></td>
    </tr>
    </table>
    </form>
    </fieldset>
</body>
</html>