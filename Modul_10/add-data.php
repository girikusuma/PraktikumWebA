<?php 
	session_start();
	if(isset($_POST['kirim'])){

		include ('koneksi.php');

		$nama=$_POST['nama'];
		$umur=$_POST['umur'];
		$dept=$_POST['dept'];

		$konek->query("INSERT INTO tb_pagination (name, age, dept) VALUES('".$nama."','".$umur."','".$dept."')");
	}
	header("location:index.php");
	exit();
 ?>