<html>
<title>Aplikasi Download</title>
<body>
<!-- Load file CSS Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
<?php
  $konek = mysqli_connect("localhost","root","","upload");

  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"simpan1.php?file=$r[nama_file]\">Download File</a><hr><br>";
  }
?>