<!DOCTYPE html>
<html>
<head>
    <title>Poin Pemain</title>
</head>
<body>

<h3>Total Poin Pemain</h3>

<form method="post">
    Masukkan poin pemain: <input type="number" name="poin">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $poin = $_POST['poin'];

    if (is_numeric($poin)) {
        $totalSkor = $poin;
        $hadiahTambahan = $poin > 500 ? "YA" : "TIDAK";

        echo "Total skor pemain adalah: $totalSkor <br>";
        echo "Apakah pemain mendapatkan hadiah tambahan? ($hadiahTambahan)";
    } else {
        echo "Masukkan poin yang valid.";
    }
}
?>

</body>
</html>
