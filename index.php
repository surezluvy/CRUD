<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<h1>Data pengguna</h1>
		<a href="tambah.php">Tambah Data</a>
		<table border='1'>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
				<th>Aksi</th>
			</tr>
			<?php 
				$no = 1;
				// Memanggil koneksi.php agar dapat menggunakan variabel didalamnya
				include 'koneksi.php';
				// Mengisi nilai pada variabel $data
				// mysql_query digunakan untuk membuat query mysql, dimana pada contoh tersebut 
				// digunakan untuk menampilkan semua data pada tabel user.
				$data = mysqli_query($connect, "SELECT * FROM user");
				while($data2 = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data2['username'] ?></td>
				<td><?php echo $data2['email'] ?></td>
				<td><?php echo $data2['password'] ?></td>
				<td>
				<div>
					<a class="hapus" href="hapus.php?id=<?php echo $data2['id'] ?>">Hapus</a>
					<a class="edit" href="edit.php?id=<?php echo $data2['id'] ?>">Ubah</a>
				</div>
				</td>
			</tr>
			<?php $no++; } ?>
		</table>	
	</div>
</body>
</html>