<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>Form Contoh</h2>
<form id="myForm">
    <label for="buah">Pilih Buah:</label>
    <select name="buah" id="buah">
        <option value="apel">Apel</option>
        <option value="Pisang">Pisang</option>
        <option value="Mangga">Mangga</option>
        <option value="Jeruk">Jeruk</option>
    </select>

    <br>

    <label>Pilih Warna Favorit:</label><br>
    <input type="checkbox" name="warna[]" value="merah"> Merah<br>
    <input type="checkbox" name="warna[]" value="biru"> Biru<br>
    <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

    <br>

    <label>Pilih Jenis Kelamin:</label><br>
    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki<br>
    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

    <br>

    <input type="submit" value="Submit">
</form>
<div id="hasil">
    <!--Hasil akan ditampilkan disini-->
</div>

<script>
    $(document).ready(function(){
        $("#myForm").submit(function(e){
            e.preventDefault();//Mencegah pengiriman form secara default

            //Mengumoulkan data form
            var formData = $("#myForm").serialize();

            //kirim data ke server PHP
            $.ajax({
                url: "proses_lanjut.php", //Ganti dengan nama file PHP yang sesuai
                type: "POST",
                data: formData,
                success: function (response) {
                    //Tampilkan hasil dari server di div "hasil"
                    $("#hasil").html(response);
                }
            });
        });
    });
</script>
</body>
</html>