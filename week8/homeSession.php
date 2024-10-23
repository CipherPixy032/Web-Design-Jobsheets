<html>
    <head>
        <title>Halaman H</title>
    </head>
    <body>
        <?php
            session_start();
            if ($_SESSION['status'] == 'login') {
                echo "selamat datang " . $_SESSION['username'];
        ?>
                <br><a href="sessionLogout.php">Logout</a>
        <?php
            } else {
                echo "anda belum login. silahkan";
        ?>
                <a href="sessionLoginForm.html">Login</a>
        <?php
            }
        ?>
    </body>
</html>