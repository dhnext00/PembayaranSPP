<!DOCTYPE html>
<html>
<head>
	<title>menghitung luas persegi panjang</title>
</head>
<body>
<h2>Hitung luas persegi panjang</h2>
<h3>isi data:</h3>
<form action="" method="POST">
	<table border="0">
		<tr>
			<td>panjang</td>
			<td>:</td>
			<td><input type="text" name="panjang"></td>
		</tr>
		<tr>
			<td>lebar</td>
			<td>:</td>
			<td><input type="text" name="lebar"></td>
		</tr>
		<tr>
			<td><input type="submit" name="input-data" value="input"></td>
		</tr>
	</table>
</form>
</body>
</html>
<h5>hasil perhitungan luas perseghi panjang</h5>
<?php 
if (isset ($_POST["input-data"]))
{
$panjang=$_POST["panjang"];
$lebar=$_POST["lebar"];
$luas= $panjang*$lebar;
echo "Panjang Persegi Panjang Adalah : $panjang <br>";
echo "Lebar Persegi Panjang Adalah : $lebar <br>";
echo "Rumus : $panjang * $lebar <br>";
echo "Hasil : $luas";
}
 ?>
