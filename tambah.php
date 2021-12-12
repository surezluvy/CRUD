<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<!-- action="proses.php" berarti proses dalam form tersebut nantinya akan dikirim ke proses.php -->
	<!-- lalu pada proses.php nantinya akan menginputkan data ke database -->
	<!-- method="POST" digunakan agar data yang diinputkan user tidak terlihat pada url website -->
	<form action="proses.php" method="POST">
		<h1 class="judul">Tambah data</h1>

		<div>
			<label>Username :</label>
			<!-- required digunakan agar user diwajibkan mengisikan data pada form tersebut -->
			<!-- name="username" digunakan pada saat mengirimkan data ke proses.php maka data tersebut bernama username -->
			<input required type="text" name="username" placeholder="Masukan username"><br>

			<label>Email :</label>
			<input required type="email" name="email" placeholder="Masukan email"><br>
	
			<label>Password :</label>
			<input required type="password" name="password" placeholder="Masukan password"><br>

			<input type="reset" value="Reset"><br>
			<input type="submit" value="Submit" name="submit"><br>
			<a href="index.php">Semua data</a>
		</div>
	</form>
</body>
</html>				