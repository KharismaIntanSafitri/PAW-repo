<?php
function luas_segitiga($alas, $tinggi) //inisialisasi pembuatan fungsi luas segitiga denegan menetapkan variabel parameter1 sebagai $alas dan parameter2 dengan variabel $tinggi
{
    $a=$alas; //pembuatan variabel baru bernama $a untuk menampung nilai dari parametr1 ($alas) agar nantinya dapat dioperasikan
    $t=$tinggi; //pembuatan variabel baru bernama $t untuk menampung nilai dari parametr2 ($tinggi) agar nantinya dapat dioperasikan
    $luas=($a*$t)/2; //membuat variabel $luas untuk menampung nilai pengoprasian dari nilai variabel parameter yang diinputkan
    return $luas; //mengembalikan nilai dari variabel $luas ketika fungsi luas_segitiga dipanggil
}
function luas_persegipanjang($panjang, $lebar) //inisialisasi pembuatan fungsi luas persegi panjang denegan menetapkan variabel parameter1 sebagai $panjang dan parameter2 dengan variabel $lebar
{
    $p=$panjang;//pembuatan variabel baru bernama $p untuk menampung nilai dari parameter1 ($panjang) agar nantinya dapat dioperasikan
    $l=$lebar;//pembuatan variabel baru bernama $l untuk menampung nilai dari parameter2 ($lebar) agar nantinya dapat dioperasikan
    $hasil=($p*$l);//membuat variabel $hasil untuk menampung nilai pengoprasian dari nilai variabel parameter yang diinputkan
    return $hasil;//mengembalikan nilai dari variabel $hasil ketika fungsi luas_persegi panjang dipanggil
}

//menampilkan soal nomor satu kemudian memanggil fungsi luas segitiga lalu menginputkan nilai parameter1 ($alas = 3) dan nilai parameter2 ($tinggi = 6)
echo "Sebuah alas segitiga memiliki alas berukuran 3 cm dan tinggi 6 cm, maka luas dari segitaga pertama tersebut adalah <br /> = (alas x tinggi) / 2 <br /> = (3 x 6) / 2 <br />=" .luas_segitiga(3,6), "<br />", "<br />";
//menampilkan soal nomor satu kemudian memanggil fungsi luas segitiga lalu menginputkan nilai parameter1 ($alas = 3) dan nilai parameter2 ($tinggi = 6) kemudian dikalikan dnegan 2 karena ukura segitiga ke dua lebih besar 2 kali lipat dibandingkan dengan segitiga 1
echo "Terdapat segitiga dengan ukuran 2 kali lipat ukuran segitiga pertama, maka luas dari segitiga kedua ini adalah <br /> = (((alas x tinggi) / 2) x 2) <br /> = (((3 x 6) / 2) * 2) <br />= ".luas_segitiga(3,6)*2, "<br />", "<br />";
$persegi=luas_persegipanjang(15,30); //membuat variabel persegi untuk memanggil dan menampung hasil operasi perhitungan fungsi luas persegi panjang dengan nilai parameter1 ($panjang = 30) dan nilai parameter2 ($lebar = 15)
//menampilkan soal nomor satu kemudian memanggil fungsi luas segitiga lalu menginputkan nilai parameter1 ($alas = 20) dan nilai parameter2 ($tinggi = 50) kemudian dikurangkan dnegan nilai luas persegi yang sudah ditampung dalam variabel $persegi
echo "Tentukanlah hasil pengurangan luas segitiga berukuran tinggi 50 cm dan panjang alas 20 cm dengan persegi panjang yang memiliki lebar 15 cm dan panjang 30 cm. Hasilnya adalah <br />= luas segeitiga - luas persegi <br />= ((alas x tinggi) / 2) - (p x l) <br />= ((20 x 50) / 2) - (15 x 30) <br/> =" .luas_segitiga(20,50)-$persegi;
?>

