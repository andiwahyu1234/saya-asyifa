<?php // <?php : pembuka skrip PHP

//operator aritmatika
$x = 10; // mendefinisikan variabel $x dengan nilai 10.
$y = 20; // mendefinisakn variabel $y dengan nilai 20.
$jumlah = $x + $y; // menyimpan hasil penjumlahan $x dengan $y ke dalam $jumlah.
$kurang = $y - $y; // menyimpan hasil pengurangan $x dan $y ke dalam $kurang
$kali = $x * $y; // menyimpan hasil perkalian $x dan $y ke dalan $kali.
$bagi = $x / $y;// menyimpan hasil pembagian $x dan $y ke dalam $kali.
$percen = $x % $y; // Menyimpan hasil sisa pembagian $x dan $y ke dalam $percen.
$penaikan = ++$x; // menyimpan hasil penaikan $x ke dalam $penaikan.
$penurunan = --$y; // menyimpan hasil penurunan $x dan $y ke dalam $penurunan.


// Operator Pembanding
$x_sama_y = ($x == $y); // memriksa apakah $x sama degan $y.
$x_tidak_sama_y = ($x != $y); // memeriksa apakah $x tidak sama dengan $y.
$x_kurang_y = ($x < $y); // memeriksa apakah $x kurang dari $y
$x_lebih_y = ($x > $y); // memeriksa apakah $x lebih dsri $y.
$_percen_y = ($x % $y); // memeriksa berapakah sisa pembagian dari $x dan $y.
$x_penaikan_y ($penaikan); // memeriksa berapakah penaikan dari $x dan $y.
$x_penurunan_y ($penurunan); // memeriksa berapakah penurunan dari $x dan $y.

echo "<h3>Operator Aritmatika</h3>";
echo " jumlah (x + y): " . $jumlah . "<br>"; // menampilkan hasil dari penjumlahan
echo " kurang (x - y): " . $kurang . "<br>"; // menampilkan hasil dari pengurangan
echo " kali (x * y): " . $kali . "<br>"; // menampilkan hasil dari perkalian
echo " Bagi (x / y): " . $bagi . "<br>"; // menampilkan hasil dari pembagian
echo "percen (x % y); " . $percen . "<br>";
echo "penaikan (x ++ y) " . $penaikan . "<br>";
echo "Penurunan (x -- y) " .$Penurunan . "<br>";

echo "<h3>Operator Pembanding</h3>";
echo "x == y: " . ($x_sama_y ? 'true' : 'false') . "<br>"; // menampilkan hasil dari perbandingan sama dengan.
echo "x != y: " . ($x_tidak_sama_y ? 'true': 'false') . "<br>"; // Menampilkan hasil dari perbandingan tidak sama dengan.
echo "x < y: " . ($x_kurang_y ? 'true' : 'false') . "<br>"; // menampilkan hasil dari perbandingan kurang dari
echo "x > y; " . ($x_lebih_y ? 'true' : 'false') . "<br>"; // menampilkan hasil dari perbandingan lebih dari
echo "x % y ; " . ($x_percen_y ? 'true' : 'false') . "<br>"; // menampilkan hasil dari pemercenan 
echo "x ++ y ;" . ($x_penaikan_y ? 'true' : 'false') . "<br>"; // menampi;kan hasil dari penaikan
echo "x -- y ;" . ($x_penurunan_y ? 'true' : 'false') . "<br>" . "<br>";
?>