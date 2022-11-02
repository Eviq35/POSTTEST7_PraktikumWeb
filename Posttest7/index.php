
<?php
require 'koneksi.php';
// if(!empty($_SESSION["id"])){
//   header("Location: index.php");
// }
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($db_link, "SELECT * FROM users WHERE username = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.html");
    }
    else{
      echo
      "<script> alert('Password Salah'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Tidak Ditemukan'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
      
      .rgs{
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
				height: 60px;
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
    <h2>LOGIN</h2>
    </div>
    <form action="" method="post" autocomplete="off">
      <center>
        <table border="0" cellpadding="12">
            <tr>
                <td><label for="usernameemail">Username</label></td>
                <td>:</td>
                <td><input type="text" name="usernameemail" id = "usernameemail" placeholder="Username" required value=""></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" id = "password" placeholder="Password" required value=""></td>
            </tr>
            <tr>
                <td><button class="pointer" type="submit" name="submit">Login</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a class="rgs" href="register.php">Registration</a></td>
            </tr>
        </table>
        
    </center>
    </form>
    <br>
    
    <div class="footer">
		Vigo Santri Ali 2009106008
	  </div>
    
  </body>
</html>




