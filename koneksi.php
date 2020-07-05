<?php

$koneksi = mysqli_connect("localhost", "root", "","bgl");
$result = mysqli_query($koneksi, "SELECT * FROM bgl" );
//var_dump($result);


?>