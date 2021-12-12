<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="proses_edit.php" method="POST">
		<?php 
			include 'koneksi.php';
			// $_GET['id'] digunakan untuk mendapatkan nilai dari url yang bernama id
			$id = $_GET['id'];
			// mengeksekusi query mysql untuk mendapatkan data user dimana id nya adalah $id
			$data = mysqli_query($connect, "SELECT * FROM user WHERE id='$id'");
			$data2 = mysqli_fetch_array($data);
		 ?>
		<h1 class="judul">Edit data Id <?php echo $data2['id'] ?></h1>

		<div>
			<!-- Kenapa type="hidden", disini kita hidden form tersebut karena kita tidak ingin pengguna mengubah id tersebut -->
			<!-- karena kita gunakan id tersebut dalam pengubahan data, jika id tersebut dirubah maka dapat terjadi error -->
			<!-- sehingga kita sembunyikan form tersebut dan mengirimkanya pada proses_edit.php -->
			<input type="hidden" name="id" value="<?php echo $data2['id'] ?>">

			<label>Username :</label>
			<!-- Value="" berarti kita menginisialisasikan nilai dari form tersebut -->
			<!-- Dimana kita mengisi form tersebut dengan data dari tabel user yang memiliki id $id -->
			<input required type="text" name="username" placeholder="Masukan username" value="<?php echo $data2['username'] ?>"><br>

			<label>Email :</label>
			<input required type="email" name="email" placeholder="Masukan email" value="<?php echo $data2['email'] ?>"><br>
	
			<label>Password :</label>
			<input required type="text" name="password" placeholder="Masukan password" value="<?php echo $data2['password'] ?>"><br>

			<input type="reset" value="Reset"><br>
			<input type="submit" value="Submit" name="Ubah"><br>
			<a class="tombol" href="data.php">Data</a>
		</div>
	</form>
</body>
</html>				