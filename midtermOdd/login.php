<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded username and password
    $validUsername = "Washer";
    $validPassword = "Wash123"; // Must contain uppercase, lowercase, and more than 6 characters

    if (empty($username) || empty($password)) {
        $error = "Both fields must be filled";
    } elseif ($username == $validUsername && $password == $validPassword) {
        // If valid, create session and redirect to home page
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f3f4f6;
        }

        .background-blur {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 255, 255, 0.2);
            filter: blur(20px);
            z-index: 1;
        }

        .login-container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            height: auto;
            min-height: 70%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: white;
            position: relative;
            z-index: 2;
        }

        .left-side {
            background-color: #edf7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            overflow: hidden;
        }

        .left-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-side {
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .forgot-password {
            text-align: right;
            margin-top: 10px;
        }

        .create-account {
            margin-top: 20px;
            text-align: center;
        }

        .create-account a {
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                height: auto;
            }

            .left-side, .right-side {
                flex: none;
                width: 100%;
                height: 300px; /* Adjusted height for smaller screens */
            }

            .right-side {
                padding: 20px;
            }

            .left-side img {
                object-fit: cover;
                height: 100%;
            }
        }

        @media (max-width: 576px) {
            .right-side {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<div class="background-blur"></div>

<div class="login-container container">
    <div class="row w-100">
        <!-- Left side with new background image -->
        <div class="col-md-6 left-side">
            <img src="background/bkg.jpg" alt="UTS Laundry Illustration">
        </div>

        <!-- Right side with login form -->
        <div class="col-md-6 right-side">
            <div class="login-box">
                <div class="logo">
                    <img src="logo/logo.png" alt="Logo">
                </div>
                <h4 class="text-center mb-4">Welcome to UTS Laundry</h4>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-dark btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
