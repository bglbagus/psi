<?php

$koneksi = mysqli_connect("localhost", "root", "","psi");
$result = mysqli_query($koneksi, "SELECT * FROM tabel" );
// var_dump($result);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman tabel</title>
</head>
<body>
	<h1>Tabel</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>id_kota</th>
		<th>nama_kota</th>
		<th>provinsi</th>


	</tr>
	<?php while ($row = mysqli_fetch_row($result)) :?>
	<tr>
		<td><?php echo $row[0];  ?></td>
		<td><?php echo $row[1];  ?></td>
		<td><?php echo $row[2];  ?></td>
	</tr>
<?php endwhile; ?>

</table>
<br><br><a href="index.php">Kembali ke halaman Utama</a>

</body>
</html>