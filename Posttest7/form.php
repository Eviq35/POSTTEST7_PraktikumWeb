<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM REGISTRASI</title>
</head>
<body>
    <h1>FORMULIR REGISTRASI</h1>
    <form method="POST" action="hasil.php">
        <table rules="rows">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"</td>
        </tr>
        <tr>
            <tr>
                <td>Tanggal lahir</td>
                <td><input type="date" name="tgl"</td>
            </tr>
        <tr>
            <td>umur</td>
            <td><input type="number" name="umur"</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"</td>
        </tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="laki"> Laki-Laki
            <input type="radio" name="gender" value="perempuan"> Perempuan</td>
        </tr>
           
        </table>
        <br>
        <button type="submit" name="submit" value="Submit">SEND</button>
        <button type="reset" name="reset" value="reset">RESET</button>

</body>
</html>