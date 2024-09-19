<?php
echo "<h3>Daftar Nilai Siswa Lulus</h3>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

echo "<h3>Daftar Karyawan Pengalaman Kerja</h3>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawabPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawabPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawabPengalamanLimaTahun);

echo "<h3>Daftar Nilai Siswa Lulus</h3>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Boba', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<h3>Nilai Diatas Rata-Rata Siswa</h3>";
$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($daftarNilaiSiswa as $data) {
    $totalNilai += $data[1];
}
$rataRataKelas = $totalNilai / count($daftarNilaiSiswa);

echo "Daftar nilai siswa di atas rata-rata kelas ($rataRataKelas): <br>";
foreach ($daftarNilaiSiswa as $data) {
    if ($data[1] > $rataRataKelas) {
        echo "{$data[0]} - {$data[1]} <br>";
    }
}
?>
