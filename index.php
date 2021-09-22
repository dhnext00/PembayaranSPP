<?php 
 session_start();
 ?>
<!DOCTYPE html>
<?php 
setcookie("test_cookie", "test", time() + 3600, '/');
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Belajar PHP</title>
</head>
<body>
<?php echo "hello"; ?>
<h1>konstanta</h1>
<?php 
define('konstanta','konstanta adalah tetapan nilai dalam aplikasi');
define ('PHI', '3.14');
echo "<p>". konstanta . "</p>";

//Identifier
/*Identifier adalah sebutan lain untuk nama suatu variable
- Dimulai dengan tanda dolar $
- Karakter berikutnya dapat berupa huruf, angka, atau underscore
- Bersifat Case sensitive
- Karakter setelah tanda dolar adalah huruf atau underscore */

$r = 10;
echo "<p>Menghitung Luas Lingkaran</p>";
echo "<p>Jari-Jari : " . $r . "</p>";
$luas = PHI *$r *$r;
echo "<p>Luas Lingkaran : ". $luas . "</p>"; 
echo "<h1>Tipe Data</h1>";
echo "<h3>Integer</h3>";
echo "<p>Digunakan untuk menyimpan bilangan bulat</p>";
$a = 10; //variable $a memiliki tipe data integer
echo $a;
echo "<h3>Double</h3>";
$b = 16.05; //variable $b memiliki tipe data double
echo $b;
echo "<h3>Boolean</h3>";
$jawaban = TRUE;
echo $jawaban;
echo "<h3>String</h3>";
$c = "Belajar PHP"; //variable $c memiliki tipe data string
echo $c;
echo "<h3>Array</h3>";
echo "<p>Digunakan untuk menyimpan kumpulan data</p>";
$hari[0] = "Senin";
$hari[1] = "Selasa";
$hari[2] = "Rabu";
$hari[3] = "Kamis";
$hari[4] = "Jum'at";
$hari[5] = "Sabtu";
$hari[6] = "Minggu";

echo "Sekarang adalah hari $hari[2] </br>"; //menampilkan tanpa perulangan 
for($i=0;$i<=6;$i++){ //menampilkan dengan perulangan 
	echo $hari[$i] . "</br>";
}
 ?>
 <h1>Object</h1>
 <p>Digunakan untuk menyimpan data bertipe object</p>
 <?php 
 class belajar_rpl{
 	function belajar(){
 		return "Hari ini kita melanjutkan pelajaran yang kemarin yaitu belajar PHP";
 	}
 }

 $obj = new belajar_rpl();
 echo "Pelajaran hari ini adalah ".$obj->belajar();
  ?>
  <h1>Operator</h1>
  <p>operator digunakan untuk membandingkan nilai dari suatu variable terhadap variable terhadap variable atau nilai yang lain. Beberapa operator dalam PHP ditunjukkan dalam gambar dibawah.</p>
  <img src="operator.JPG">
  <h1>Percabangan</h1>
  <p>Terdapat empat tipe percabangan dalam PHP.</p>
  <h4>1. If</h4>
  <p>Digunakan jika terdapat satu alternatif yang harus dipilih.</p>
  <?php 
  $d = 8;
  if($d < 10){
  	$d = $d + 5;
  	echo $d;
  } 
  ?>
  <h4>2. If...Else</h4>
  <p>Digunakan jika terdapat dua alternatif yang harus dipilih.</p>
  <?php 
  $nilai = 81;
  if ($nilai < 60) {
  	echo "Nilai Anda adalah $nilai. Selamat, Anda Telah Lulus dengan nilai biasa saja!!";
  }elseif($nilai >=60 && $nilai <80) {
  echo "Nilai Adnda adalah $nilai. Selamat. Anda Telah Lulus dengan nilai lumayan!!";
}else {
	echo "SELAMAT ANDA LULUS DENGAN NILAI LUAR BIASA";
}
?>
<h4>4. Switch</h4>
<p>Digunakan jika terdapat banyak alternatif yang harus dipilih/diseleksi.</p>
<?php 
$f = 1;
switch ($f) {
	case 1:
		echo "RPL";
		break;
	case 2:
	echo "MM";
	break;
	case 3:
	echo "TKJ";
		break;
		case 4:
		echo "AKN";
		break;
}
 ?>
 <h1>Perulangan</h1>
 <h4>1. For</h4>
 <p>Sintaks Umum</p>
 <pre>
 	for(nilai awal, nilai akhir, peningkatan/penurunan){
 	Statement;
 }
 </pre>
 <p>contoh</p>
 <?php 
 for($g=1; $g <= 10; $g++){
 	echo $g;
 	echo"<br>";
 }
  ?>
  <h4>2. While</h4>
  <P>Sintaks umum</P>
  <pre>
  	while(kondisi berhenti){
  	Statement;
  }
  </pre>
  <p>contoh</p>
  <?php  $h = 1;
  while ($h <= 10){
  	echo $h;
  	echo"<br>";
  	$h=$h+1;
  } 
  ?>
  <h4>3. Do...while</h4>
  <p>Sintaks Umum</p>
  <pre>
  	do{
  	statement:
  }while (kondisi berhenti);
  </pre>
  <p>conoth</p>
  <?php 
  $i = 1;
  do{
  	echo "Perulangan ke-$i<br>\n";
  	$i++;
  }while($i <= 10);
   ?>
   <h1>Cookies</h1>
   <p>Cookies adalah file berukuran sangat kecil yang berada di komputer client (dalam konteks  konsep client-server website). File ini berisi data atau informasi tertentu yang berasal dari aktivitas browsing pengunjung website, misalnya informasi login, sejarah website yang dikunjungi, browser yang digunakan, dan lain sebagainya. File ini dapat dipanggil kembali ketika pengunjung website mrmbuka website yang sama dan mengunggah informasi yang sama pada saat website dibuka pada waktu lampau. Hal ini memudahkan pengunjung, misalnya tidak perlu login setiap kali membuka sebuah halaman website yang sama. Dalam PHP, sintaks umyuk membuat cookies adalah  sebagai berikut.</p>
   <img src="cookies.JPG">
   <p>Catatan: setcookie() harus diletakkan sebelum tag html</p>
   <?php 
   if(count($_COOKIE) > 0) {
   	echo "Cookies are enabled.";
   } else {
   	echo "Cookies are disabled.";
   }
   ?>
   <h1>Session</h1>
   <p>Session memiliki fungsi yang sama dengan cookies. Hanya saj asession akan disimpan di server, Session adalah mekanisme yang digunakan untuk bertukar informasi antar halaman dalam satu website.</p>
   <?php  $_SESSION["kelas"] = "RPL";
   echo $_SESSION['kelas'];
   ?>
   <h1>Tugas Penilaian</h1>
   <p>Buatlah suatu kalkulator rumus luas-luas bidang datar (persegi, persegi panjang, segitiga, jajar genjang, layang-layang, belah ketupat, trapesium dan lingkaran). Kalkulator ini memiliki aturan sebagai berikut. Ketika pengguna memasukkan sebuah nilai minus, sistem tidak akan melakukan proses perhitungan dan memunculkan pesaan error.</p>
   <ol>
   	<li>Dhini = Persegi panajang dan jajar genjang.</li>
   	<li>Noel = layang-layang, Belah ketupat.</li>
   	<li>Roni = Persegi dan segitiga.</li>
   	<li>Syafwan = lingkaran, trapesium.</li>
   </ol>
   <h1>Kalkulator Persegi Panjang</h1>
   <li><a href="luaspersegipanjang.php">Persegi Panjang</a></li>
    <h1>Kalkulator Jajar Genjang</h1>
    <li><a href="luasjajargenjang.php">Jajar Genjang</a></li>
</body>
</html>