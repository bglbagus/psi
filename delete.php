<?php

$koneksi = mysqli_connect("localhost", "root", "","bgl");
$result = mysqli_query($koneksi, "SELECT * FROM bgl" );
//var_dump($result);


?>


<?php
// include database connection file



$id = $_GET['id'];


$result = mysqli_query($db, "DELETE FROM faiz WHERE Username='$id'");

header("Location:index.php");
?>