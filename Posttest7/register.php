<?php
require 'koneksi.php';
if (isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $nama = $_POST['nama'];

    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('username sudah ada');</script>";

    }else{
        if($password === $cpassword){
            $query = "INSERT INTO users VALUES ('','$username','$password','$nama')";
            mysqli_query($conn,$query);
            echo "<script>alert('registrasi berhasil');</script>";

        }else{
            echo "<script>alert('password tidak cocok');</script>";
        }
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style type="text/css">
		body{
				margin: auto;
				font-family: arial;
			}

			.latar{
				width: 100%;
				overflow: hidden;
				background: #181818;
			}

				.latar h2{
					margin-left: 15px;
					text-align: center;
					color: crimson;
				}

			table{
				border-collapse: collapse;
				font-weight: bold;
			}

            .lgn{
                padding: 8px;
                border-radius: 5px;
                background-color: black ;
                color:crimson;
			}

			input{
				padding: 8px;
				border-radius: 5px;
				border-style: solid;
				border: 1px solid black;
			}

			.select{
				width: 100%;
				padding: 8px;
			}

			.footer{
				width: 100%;
				height: 50px;
				background-color: #42855B;
				text-align: center;
				font-size: 10pt;
				color: white; 
				padding-top: 40px;
				padding-bottom: 10px;
				margin-top: 410px;
			}


			.pointer{
				cursor: pointer;
			}

	</style>
</head>
<body>
    <div class="latar">
    <h2>REGISTER</h2>
    </div>
    <form action="" method="POST">
        <center>
        <table border="0" cellpadding="12">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" id="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td><label for="cpassword">Konfirmasi</label></td>
                <td>:</td>
                <td><input type="password" name="cpassword" id="cpassword" placeholder="Konfirmasi" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" placeholder="Nama" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="register" id="register" >Register</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a class="lgn" href="index.php">Login</a></td>
            </tr>
            </table>
        </center>
    </form>
    <div class="footer">
		Vigo Santri Ali 2009106008
	</div>
</body>
</html>