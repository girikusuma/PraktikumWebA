<?php 

	if(isset($_GET["id"])){
		include 'koneksi.php';	
		$konek->query("DELETE FROM tb_pagination WHERE id =".$_GET["id"]);
	}
	header("location:index.php");
	exit();
?>