<?php 
	include 'koneksi.php';
	$id = $_POST['id'];
	mysqli_query($connect, "UPDATE user SET username='$_POST[username]', email='$_POST[email]', password='$_POST[password]' WHERE id='$id'") or die(mysqli_error($connect));
 ?>

  <script>
	alert("Data berhasil di ubah.");
	window.location.href = "index.php";
</script>