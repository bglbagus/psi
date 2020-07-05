<?php

$koneksi = mysqli_connect("localhost", "root", "","bgl");
$result = mysqli_query($koneksi, "SELECT * FROM bgl" );
//var_dump($result);


?>

<!DOCTYPE html>
<html>
<head>
	<!-- Load file CSS Bootstrap -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<title>Bagus Gusti Lambang</title>
</head>
<body>
<div class="container">
	<h2>Modul IV</h2>
	
<?php

include("koneksi.php");


$result = mysqli_query($koneksi, "SELECT * FROM bgl");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="tambah.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Username</th> <th>NPM</th> <th>Nama User</th> <th>Telepon</th> <th>Password</th> <th>Aksi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['NPM']."</td>";
        echo "<td>".$user_data['Namauser']."</td>";
		echo "<td>".$user_data['telepon']."</td>";
		echo "<td>".$user_data['password']."</td>";		
        echo "<td><a href='updateform.php?id=$user_data[username]'>Update</a> | <a href='delete.php?id=$user_data[username]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>