<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $error = [];

    if (empty($nama)) {
        $error[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $error[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (strlen($password) < 8) {
        $error[] = "Password harus minimal 8 karakter.";
    }

    if (!empty($error)) {
        foreach ($error as $err) {
            echo $err . "<br>";
        }
    } else {
        echo "Form validasi berhasil: Nama = $nama, Email = $email, Password valid.";
    }
}
