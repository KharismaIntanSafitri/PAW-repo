<?php
<h1>Modul I PHP Variable dan Type Data 1</h1>
<p>Nama : <span>Kharisma Intan Safitri</span></p>
<p>NIM  : <span>200411100010</span></p>
$a=7; //membuat variabel "a" yang memiliki nilai berupa angka 2
echo "Nilai x : $a"
$b=6; //membuat variabel "b" yang memiliki nilai berupa angka 6
$c=3; //membuat variabel "c" yang memiliki nilai berupa angka 3
$d=5; //membuat variabel "d" yang memiliki nilai berupa angka 5

echo "Tentukan hasil penjumlahan dari a + d + a ! <br />"; //untuk menampilkan text soal serta tag br digunakan untuk memberi enter terhadap baris selanjutnya
$penjumlahan=$a + $d + $a; //membuat variabel baru dengan nama penjumlahan untuk menampung oprasi penjumlahan terhadap variabel yang dipanggil
echo " = a + d + a <br /> = $a + $d + $a <br /> = $penjumlahan <br /> <br />" ; //menampilkan nilai dari variabel yang dipanggil

echo "Tentukan hasil pengurangan dari b + c + d ! <br />"; //untuk menampilkan text soal serta tag br digunakan untuk memberi enter terhadap baris selanjutnya
$pengurangan=$b - $c - $d; //membuat variabel baru dengan nama pengurangan untuk menampung oprasi pengurangan terhadap variabel yang dipanggil
echo " = b - c - d <br /> = $b - $c - $d <br /> = $pengurangan <br /> <br />" ;  //menampilkan nilai dari variabel yang dipanggil

echo "Tentukan hasil perkalian dari b x a ! <br />"; //untuk menampilkan text soal serta tag br digunakan untuk memberi enter terhadap baris selanjutnya
$perkalian=$b * $a; //membuat variabel baru dengan nama perkalian untuk menampung oprasi perkalian terhadap variabel yang dipanggil
echo " = b  x a <br /> = $b x $a <br /> = $perkalian <br /> <br />" ;  //menampilkan nilai dari variabel yang dipanggil

echo "Tentukan hasil pembagian dari b / c ! <br />"; //untuk menampilkan text soal serta tag br digunakan untuk memberi enter terhadap baris selanjutnya
$pembagian=$b / $c; //membuat variabel baru dengan nama peembagian untuk menampung oprasi pembagian terhadap variabel yang dipanggil
echo " = b / c <br /> = $b / $c <br /> = $pembagian <br /> <br />" ;  //menampilkan nilai dari variabel yang dipanggil

?>

