<?php

$koneksi = mysqli_connect("localhost", "root", "","bgl");
$result = mysqli_query($koneksi, "SELECT * FROM bgl" );
//var_dump($result);


?>


<html>

<title>Pencarian</title>

<?php 

?>
<!-- Load file CSS Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <div class="container">
<h3>Form Pencarian Anggota</h3>
 
  
<form action="pencarian.php" method="get">
<table width='80%' border=1>
<tr>
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 </tr>
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];

 echo "<b>Hasil pencarian Anggota : ".$cari."</b>";
}
?>
 
<table border="1">
 <tr>
  <th>No</th>
  <th>Nama</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $user_data = mysqli_query($koneksi,"select * from faiz where Username like '%".$cari."%'");    
 }else{
  $user_data = mysqli_query($koneksi,"select * from faiz");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($user_data)){
 ?>
 <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $d['Username']; ?></td>
 </tr>
 <?php } ?>
</table>
</html>