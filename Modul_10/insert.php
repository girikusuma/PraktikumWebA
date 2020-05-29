<!DOCTYPE html>
<html>
<head>
	<title>CRUD Page</title>
</head>
<link rel="stylesheet" type="text/css" href="custom.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<body>
	<center><h1>Form Inputan</h1>
	<form action="add-data.php" method="POST">
	<div class="tabel">
		<table>
			<tr>
				<td><h3>Nama</h3></td>
				<td><h3>:</h3></td>
				<td><input class="form-control" type="text" name="nama" placeholder="Nama"></input></td>
			</tr>
			<tr>
				<td><h3>Umur</h3></td>
				<td><h3>:</h3></td>
				<td><input class="form-control" type="text" name="umur" placeholder="Umur"></input></td>
			</tr>
			<tr>
				<td><h3>Departemen</h3></td>
				<td><h3>:</h3></td>
				<td>
					<select class="form-control" name="dept">
						<option value="Information Technology">Information Technology</option>
						<option value="Marketing">Marketing</option>
						<option value="Finance">Finance</option>
						<option value="Production">Production</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button class="btn btn-primary" name="kirim">Input</button></td>
			</tr>
		</table>
	</div>
	</form>
	</center>
</body>
</html>