<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Luas Jajar Genjang</title>
</head>
<body>
<h2>Hitung luas jajar genjang</h2>
<h3>isi data:</h3>
<form action="" method="POST">
	<table border="0">
		<tr>
			<td>alas</td>
			<td>:</td>
			<td><input type="text" name="alas"></td>
		</tr>
		<tr>
			<td>tinggi</td>
			<td>:</td>
			<td><input type="text" name="tinggi"></td>
		</tr>
		<tr>
			<td><input type="submit" name="input-data" value="input"></td>
		</tr>
	</table>
</form>
</body>
</html>
<h5>hasil perhitungan luas jajar genjang</h5>
<?php 
if (isset ($_POST["input-data"]))
{
$alas=$_POST["alas"];
$tinggi=$_POST["tinggi"];
$luas= $alas*$tinggi;
echo "Alas jajar genjang Adalah : $alas <br>";
echo "Tinggi jajar genjang Adalah : $tinggi <br>";
echo "Rumus : $alas * $tinggi <br>";
echo "Hasil : $luas";
}
 ?>