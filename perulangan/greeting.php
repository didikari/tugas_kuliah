<!DOCTYPE html>
<html>
<head>
	<title>Greeting</title>
</head>
<body>
<center>
<h1>
<?php
function greeting()
{
$date = date ("G : i A");

if ($date>=0 and $date<10) {

echo "Selamat Pagi";

} else if ($date>=10 and $date<15) {

echo "Selamat Siang";

} else if ($date>=15 and $date<19) {

echo "Selamat Sore";

} else if ($date>=19 and $date<00) {

echo "Selamat Malam";

}else echo "Selamat Malam";

}
?>
<?php greeting(); ?><br>
</h1>
<font face="arial, helvetica" size="5" color="aqua">
<h2> <a href="https://jowokoding.blogspot.com" target="_blank">Welcome in Jowo Koding</a></h2>
<p align="center"><font face="arial" size="5" color="red">
<h3> Sekarang adalah
<?php

//Array Hari

$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $array_hari[date("N")];

//Format Tanggal

$tanggal = date ("j");

//Array Bulan

$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $array_bulan[date("n")];

//Format Tahun

$tahun = date("Y");

//Menampilkan hari dan tanggal

echo "hari $hari, tanggal $tanggal $bulan $tahun";

?>
<br>


Waktu menunjukkan pukul

<?php

//penulisan waktu

$date = date ("G : i A");

echo "$date WIB";
?>
</h3>
</body>
</html>