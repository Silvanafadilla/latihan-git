<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="POST" name="input">
    <h2>FORMULIR</h2>
    <table border=0>
    <tr>
    <td valign="top"> No Pendaftaran</td> 
    <td><input type="number" name"np"></td> 
    </tr><br>

    <tr>
    <td valign="top">NISN</td>           
    <td><input type="number" name"nisn"></td>
    </tr><br>

    <tr>
    <td valign="top">Nama</td>          
    <td><input type="text" name"nama"></td>
    </tr><br>

    <tr>
    <td valign="top">Alamat</td>        
    <td><textarea name="alamat" cols="15" rows="3"></textarea></td>
    </tr><br>

    <tr>
    <td valign="top">Tempat Lahir</td>   
    <td><input type="text" name"tl"></td>
    </td><br>

    <tr>
    <td valign="top">Tanggal Lahir</td>  
    <td><input type="date" name="tal"></td>
    </td><br>

    <tr>
    <td valign="top">Asal Sekolah</td>   
    <td><input type="text" name="as"></td>
    </td><br>
    
    <tr>
    <td valign="top">Jenis Kelamin</td>  
    <td><input type="radio" name="jk" value="perempuan">Perempuan
    <input type="radio" name="jk" value="Laki-laki">Laki-laki</td>
    </tr><br>
                  
    <tr>
    <td valign="top">Jurusan</td><td><select name="jurusan">
                   <option value="RPL">Rekayasa Perangkat Lunak</option>
                   <option value="TKR">Teknik Kendara Ringan</option>
                   <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
                   </select></td></tr><br>

    <tr>               
    <td valign="top">Nama Ayah</td>      
    <td><input type="text" name="na"></td>
    </tr><br>

    <tr>
    <td valign="top">Pekerjaan Ayah</td> 
    <td><input type="text" name="pa"></td>
    </tr><br>

    <tr>
    <td valign="top">Nama Ibu</td>       
    <td><input type="text" name="ni"></td>
    </tr><br>

    <tr>
    <td valign="top">Pekerjaan Ibu</td>  
    <td><input type="text" name="pi"></td>
    </tr><br>

    <tr>
    <td valign="top">Agama</td>          
                   <td><select name="agama">
                   <option value="Islam">Islam</option>
                   <option value="Kristen">Kristen</option>
                   <option value="Hindu">Hindu</option>
                   </select></td></tr><br>

    <tr>               
    <td valign="top">Hobi</td>           
                   <td><input type="checkbox" name="makan" value="makan"> makan<br>
                   <input type="checkbox" name="Tidur" value="Tidur"> Tidur<br>
                   <input type="checkbox" name="Minum" value="minum">minum<br>
                   <input type="checkbox" name="main hp" value="main hp">main hp</td>
                   </tr><br>
                   <td><input type="submit" name="simpan" value="simpan">
                   <input type="submit" name="hapus" value="hapus"></t>
    </table>
    </form>
</body>
</html>