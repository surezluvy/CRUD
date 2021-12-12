<?php 
	include 'koneksi.php';
	$id = $_GET['id'];

	mysqli_query($connect, "DELETE FROM user WHERE id='$id'") or die(mysqli_error($connect));
 ?>
 <script>
	alert("Data berhasil di hapus.");
	window.location.href = "index.php";
</script>