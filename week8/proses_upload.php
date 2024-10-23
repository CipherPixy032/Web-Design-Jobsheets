<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/"; // Store images in the "images/" folder

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true); // Create the directory if it doesn't exist
}

$allowedExtensions = array("jpg", "jpeg", "png", "gif");

// Cek apakah ada file yang diunggah
if (!empty($_FILES['images']['name'][0])) {
    // Total file yang diunggah
    $totalFiles = count($_FILES['images']['name']);
    
    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . basename($fileName); // Lokasi penyimpanan lengkap

        if (in_array($fileExtension, $allowedExtensions)) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "Tipe file $fileName tidak valid. Hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>
