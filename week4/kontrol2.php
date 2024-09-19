<?php
echo "<h3>Hasil Produk Diskon</h3>";
$hargaProduk = 120000;
$diskonPersen = 20;
if ($hargaProduk > 100000) {
    $diskon = ($diskonPersen / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $diskon;
} else {
    $hargaSetelahDiskon = $hargaProduk;
}
echo "Harga produk sebelum diskon: Rp $hargaProduk <br>";
echo "Diskon sebesar $diskonPersen% diberikan <br>";
echo "Harga produk setelah diskon: Rp $hargaSetelahDiskon";
?>