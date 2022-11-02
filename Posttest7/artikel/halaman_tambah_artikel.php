<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
			body{
				margin: auto;
				font-family: arial;
			}

			.pointer{
				cursor: pointer;
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


			input{
				padding: 10px;
				border-radius: 3px;
				border-style: solid;
				border: 1px solid black;
			}

			.select{
				width: 100%;
				padding: 10px;
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
				margin-top: 80px;
			}

			textarea{
				border: 1px solid black;
			}


	</style>
</head>
<body>
	<div class="latar">
	<h2>MANAJEMEN ARTIKEL</h2>
	</div>
	<br>
	<br>
		<form action="tambah_artikel.php" method="POST" enctype="multipart/form-data">
			<center>
			<table border="0" cellpadding="15">
				<tr>
					<td>ID Artikel</td>
					<td>:</td>
					<td><input type="text" name="idartikel" id="idartikel"></td>
				</tr>
					<tr>
						<td>Judul</td>
						<td>:</td>
						<td><input type="text" name="judul" id="judul"></td>		
					</tr>
					<tr>
						<td>Berita</td>
						<td>:</td>
						<td><textarea name="berita" id="berita" cols="30" rows="10"></textarea></td>
					</tr>
					<tr>
						<td>Poster Berita</td>
						<td>:</td>
						<td><input type="file" name="foto" accept=".jpg, .jpeg, .png, .gif"></td>
					</tr>
					<tr>
				        <td>ID USER</td>
						<td>:</td>
						<td>
				            <select name="iduser" class="select">
					        <?php
						        $iduser = mysqli_query($db_link, "select * from user");
					            while ($p = mysqli_fetch_array($iduser)){
								    echo "<option value='$p[iduser]'>($p[iduser])</option>";
								}
							?>
							</select>
					    </td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input class="pointer" type="submit" value="Save"></td>
					</tr>
			</center>
			</table>
		</form>
		<div class="footer">
		Vigo Santri Ali 2009106008 
		</div>
</body>
</html>