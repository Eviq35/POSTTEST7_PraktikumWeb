<?php
	session_start();
	$host = "localhost";
	$user_name = "root";
	$pass="";
	$database_name ="berita_game";
	$db_link = mysqli_connect($host,$user_name,$pass,$database_name);
	if(!$db_link){
		echo "Tidak Terhubung";
	}
?> 