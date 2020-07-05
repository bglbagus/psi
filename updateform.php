<?php

include_once("koneksi.php");


if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $Username=$_POST['username'];
    $NPM=$_POST['NPM'];
    $Namauser=$_POST['Namauser'];
	$Nomertelepon=$_POST['telepon'];
	$Userpassword=$_POST['password'];

  
    $result = mysqli_query($koneksi, "UPDATE bgl SET username='$username',NPM='$NPM',Namauser='$Namauser',telepon='$telepon',password='$password' WHERE Username='$id'");

   
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($koneksi, "SELECT*FROM bgl WHERE username='$id'");

while($user_data = mysqli_fetch_array($result)) {
    $username = $user_data['username'];
    $NPM = $user_data['NPM'];
    $Namauser = $user_data['Namauser'];
	$telepon = $user_data['telepon'];
	$password = $user_data['password'];
}
?>
<html>
<head> 
<!-- Load file CSS Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Edit User Data</title>
</head>

<body>
	<div class="container">
    <a href="ndex.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="updateform.php">
        <table border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="Username" value=<?php echo $Username;?>></td>
            </tr>
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="NPM" value=<?php echo $NPM;?>></td>
            </tr>
            <tr> 
                <td>Nama user</td>
                <td><input type="text" name="Namauser" value=<?php echo $Namauser;?>></td>
            </tr>
			<tr> 
                <td>Telepon</td>
                <td><input type="text" name="Nomertelepon" value=<?php echo $Nomertelepon;?>></td>
            </tr>
			<tr> 
                <td>Password</td>
                <td><input type="text" name="Userpassword" value=<?php echo $Userpassword;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>