<?php
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$presentasiKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "<h3>Informasi Kursi</h3>";
echo "Jumlah kursi yang masih kosong: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong: " . number_format($presentasiKursiKosong, 2) . "%<br>";
?>
