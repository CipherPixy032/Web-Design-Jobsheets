<?php
/*soal 15
    $pesan = "Saya arek malang";
    echo strrev($pesan) . "<br>";
*/
/*Soal 16*/
$pesan = "saya arek malang";
# Ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam arary menjadi kebalikannnya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan. "<br>";
?>