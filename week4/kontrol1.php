<?php
echo "<h3>Hasil Nilai Tanpa 2 Nilai Tertinggi dan 2 Nilai Terendah</h3>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$jumlahSiswa = count($nilaiSiswa);
$totalNilai = 0;

for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

$rataRata = $totalNilai / ($jumlahSiswa - 4);

echo "Total nilai tanpa dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Nilai rata-rata siswa: $rataRata";
?>
