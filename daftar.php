<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
		<link rel="stylesheet" type="text/css" href="daftarstyle.css">
</head>
<body>
<div class="box-form" style="padding-top: 25px;">
	<h1>Isi Data dengan Lengkap</h1>
	<div class="box-input">
<form>
	Nama :<input type="text" name="nama">
	Username :<input type="text" name="username">
	Password :<input type="password" name="password">
	Tanggal Lahir : <input type="date" name="date">
	<br>Jenis Kelamin <br>
	Pria<input type="radio" name="jk" value="p">
	Wanita<input type="radio" name="jk" value="w">
	<br>Agama : 
	<select name="agama">
		<option value="islam">islam</option>
		<option value="katolik">katolik</option>
		<option value="kristen">kristen</option>
		<option value="hindu">hindu</option>
		<option value="budha">budha</option>


		
	</select>
	<br>Hobi :<br>
	Sepak Bola<input type="checkbox" name="hobi" value="sepakbola"><br>
	Basket<input type="checkbox" name="hobi" value="basket"><br>
	Tennis<input type="checkbox" name="hobi" value="tennis"><br>
	Renang<input type="checkbox" name="hobi" value="renang"><br>
	Lari<input type="checkbox" name="hobi" value="lari"><br>
	Bulu Tangkis<input type="checkbox" name="hobi" value="bulutangkis"><br>

	<input type="submit" value="submit">
	<input type="reset">
	<input type="submit" name="simpan" value="simpan">
</form>
</div>
</div>
</body>
</html>