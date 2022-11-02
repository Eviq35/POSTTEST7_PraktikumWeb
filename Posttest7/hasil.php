<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesheet/hasil.css">
    <title>Data Registrasi</title>
</head>
<body>
    <h3>MODE</h3>
    <br>
    <button id="tombol">Switch</button>
    <p id="mode" style="display: none;">
        <button class="terangg" onclick="ubahWarna()">LIGHT</button>
        <button class="gelapp" onclick="ubahWarna()">DARK</button>
    </p>
   <h1>Data Registrasi</h1>
   <table style="margin-left:auto;margin-right:auto" border="1" width="50%">
       <tr class="modip">
           <td>Nama</td>
           <td><?php echo $_POST['nama']; ?></td>
        </tr>
       <tr class="modip">
           <td>Tanggal Lahir</td>
           <td><?php echo $_POST['tgl']; ?></td>
        </tr>
       <tr class="modip">
           <td>Umur</td>
           <td><?php echo $_POST['umur']; ?></td>
        </tr>
       <tr class="modip">
           <td>Alamat</td>
           <td><?php echo $_POST['alamat']; ?></td>
        </tr>
       <tr class="modip">
           <td>gender</td>
           <td><?php echo $_POST['gender']; ?></td>
        </tr>
       
   </table> 
   <script src="javascript.js"></script>
</body>
</html>