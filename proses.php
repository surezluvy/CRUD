<?php 
	include 'koneksi.php';
	
	// memanggil query mysql yang berisikan perintah untuk mengisikan data ke dalam tabel user
	// paramater pertama kosong karena dalam database, kolom pertama adalah id yang sudah di set A_I atau auto increment
	mysqli_query($connect, "INSERT INTO user VALUES('', '$_POST[username]', '$_POST[email]', '$_POST[password]')") or die(mysqli_error($connect));
?>
<script>
  alert("Data berhasil di tambah.");
  window.location.href = "index.php";
</script>