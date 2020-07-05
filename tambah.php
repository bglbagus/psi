<html>
<head>
<!-- Load file CSS Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Add Users</title>
</head>

<body>
	<div class="container">
    <a href="tabel2.php">Go to Home</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="NPM"></td>
            </tr>
            <tr> 
                <td>Nama User</td>
                <td><input type="text" name="Namauser"></td>
            </tr>
			<tr> 
                <td>Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
			<tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $Username = $_POST['Username'];
        $NPM = $_POST['NPM'];
        $Namauser = $_POST['Namauser'];
		$telepon = $_POST['telepon'];
		$password = $_POST['password'];

        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO bgl(username,password,Namauser,NPM,telepon) VALUES('$Username','$password','$Namauser','$NPM','$telepon')");

        // Show message when user added
        echo "User added successfully. <a href='tabel2.php'>View Users</a>";
    }
    ?>
</body>
</html>