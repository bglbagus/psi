<?php
 // echo $cek; 

include 'koneksi.php';
if (isset($_POST["login"]))
{
	 $username = $_POST["username"];
	 $password = $_POST["password"];

	 $result = mysqli_query($koneksi, " SELECT * FROM login WHERE username = '$username' and password='$password'");



	 $url = 'http://' . $_SERVER['HTTP_HOST'] . '/psi';
	 $urlIndex = $url . '/index.php';
	 if (mysqli_num_rows($result) == true)
	 {
	 	header("location: $urlIndex");
	
	 }
}
	// $error = true;
	// if (isset($error)) {
	// 	echo "Maaf Username atau Password salah";

	// 		}
?>
<?php if (isset($error)) {
		echo "Maaf Username atau Password salah";

			}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
<h1>Selamat Datang Broo..!!</h1>

<div class="box-login">
<form class = "box-input" action="" method="post">
			<h1>Halaman Login</h1>
			<label for="username"> Username :</label>
			<input type="text" name="username" id="username" placeholder="Masukan Username">
			<label for="password"> Password :</label>
			<input type="password" name="password" id="password" placeholder="Masukan Password">
			<button type="submit" name="login">Login</button>

</form>
</div>

</body>
</html>