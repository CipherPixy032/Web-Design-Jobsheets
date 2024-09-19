<?php
// Variables for arithmetic and comparison
$a = 10;
$b = 5;

// Arithmetic operations
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Comparison operations
$hasilSama = $a == $b ? 'false' : 'false';
$hasilTidakSama = $a != $b ? 'true' : 'false';
$hasilLebihKecil = $a < $b ? 'true' : 'false';
$hasilLebihBesar = $a > $b ? 'true' : 'false';
$hasilLebihKecilSama = $a <= $b ? 'true' : 'false';
$hasilLebihBesarSama = $a >= $b ? 'true' : 'false';

// Variables for logical operations
$c = true;
$d = false;

// Logical operations
$hasilAnd = $c && $d;
$hasilOr = $c || $d;
$hasilNotA = !$c;
$hasilNotB = !$d;

// Assignment operations
$a += $b; // $a = $a + $b;
$penjumlahan = $a;
$a -= $b; // $a = $a - $b;
$pengurangan = $a;
$a *= $b; // $a = $a * $b;
$perkalian = $a;
$a /= $b; // $a = $a / $b;
$pembagian = $a;
$a %= $b; // $a = $a % $b;
$sisa_bagi = $a;

// Identical and not identical comparison
$hasilIdentik = $a === $b ? 'true' : 'false' ;
$hasilTidakIdentik = $a !== $b ? 'true' : 'false' ;

// Display arithmetic results
echo "<h3>Hasil Operasi Aritmatika</h3>";
echo "Hasil penjumlahan ( 10 + 5 ): $hasilTambah <br>";
echo "Hasil pengurangan ( 10 - 5 ): $hasilKurang <br>";
echo "Hasil perkalian ( 10 * 5 ): $hasilKali <br>";
echo "Hasil pembagian ( 10 / 5 ): $hasilBagi <br>";
echo "Sisa pembagian ( 10 % 5 ): $sisaBagi <br>";
echo "Hasil pemangkatan ( 10 ^ 5 ): $pangkat <br><br>";

// Display comparison results
echo "<h3>Hasil Operasi Perbandingan</h3>";
echo "Apakah sama ( 10 == 5 ): $hasilSama <br>";
echo "Apakah tidak sama ( 10 != 5 ): $hasilTidakSama <br>";
echo "Apakah lebih kecil ( 10 < 5 ): $hasilLebihKecil <br>";
echo "Apakah lebih besar ( 10 > 5 ): $hasilLebihBesar <br>";
echo "Apakah lebih kecil atau sama ( 10 <= 5 ): $hasilLebihKecilSama <br>";
echo "Apakah lebih besar atau sama ( 10 >= 5 ): $hasilLebihBesarSama <br><br>";

// Display logical results
echo "<h3>Hasil Operasi Logika</h3>";
echo "Hasil AND ( true && false ): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR ( true || false ): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A ( !true ): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B ( !false ): " . ($hasilNotB ? 'true' : 'false') . "<br><br>";

// Display assignment results
echo "<h3>Hasil Operasi Penugasan</h3>";
echo "Penjumlahan ( a += b ): $penjumlahan <br>";
echo "Pengurangan ( a -= b ): $pengurangan <br>";
echo "Perkalian ( a *= b ): $perkalian <br>";
echo "Pembagian ( a /= b ): $pembagian <br>";
echo "Sisa Pembagian ( a %= b ): $sisa_bagi <br><br>";

// Display identical comparison results
echo "<h3>Hasil Perbandingan Identik</h3>";
echo "Hasil identik A dan B ($hasilIdentik) <br>";
echo "Hasil tidak identik A dan B ($hasilTidakIdentik) <br>";
?>
