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
	<?php
		$idartikel=$_GET['idartikel'];
		$sql = "SELECT * FROM artikel WHERE idartikel ='$idartikel'";
		$query = mysqli_query($db_link,$sql);
		$data = mysqli_fetch_array($query);
	?>
	
	<form action='edit_artikel.php?idartikel=<?php echo "$idartikel"; ?>' method='POST'>
		<center>
			
		<table border="0" cellpadding="12"> 
		
			<tr>
				<td>ID ARTIKEL</td>
				<td>:</td>
				<td><input type="text" name="idartikel" idartikel="idartikel" value="<?php echo $data['idartikel'] ?>"></td>
			</tr>

			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" idartikel="judul" value="<?php echo $data['judul'] ?>"></td>
			</tr>

			<tr>
				<td>Berita</td>
				<td>:</td>
				<td><textarea name="berita" idartikel="berita" value="<?php echo $data['berita'] ?>"></textarea>
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
		
		</table>
		</center>
	</form>
	<div class="footer">
		Vigo Santri Ali 2009106008
	</div>
</body>
</html>