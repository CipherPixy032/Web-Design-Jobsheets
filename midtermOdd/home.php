<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - UTS Laundry</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Adjusting image size and dimming effect */
        .carousel-inner img {
            width: 1133px;
            height: 490px;
            filter: brightness(0.7); /* Dim the image */
        }
        /* Use flexbox to center text horizontally and vertically */
        .carousel-caption {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }
        /* Round angled rectangle for text background */
        .carousel-caption .caption-box {
            background-color: rgba(0, 0, 0, 0.5); /* Lightly transparent black */
            border-radius: 15px;
            padding: 10px 20px;
            display: inline-block;
        }
        .carousel-caption h5 {
            font-weight: bold;
            color: #fff;
        }
        .carousel-caption p {
            color: #ddd;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="logo/logo.png" width="30" height="30" class="d-inline-block align-top" alt="UTS Laundry logo">
        UTS Laundry
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="price_check.php">Check Price</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<!-- Welcome Section -->
<header class="text-center my-4">
    <h1>Let's Start Our Washing Journey!, <?php echo $_SESSION['username']; ?>!</h1>
</header>

<!-- Slider -->
<div id="washingServiceCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="banners/banner4.jpg" alt="First banner">
            <div class="carousel-caption d-none d-md-block">
                <div class="caption-box">
                    <h5>We Exist Since 6 Hours Ago!</h5>
                    <p>We're created 6 hours ago as a form of our commitment to the Midterm test.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="banners/banner5.jpg" alt="Second banner">
            <div class="carousel-caption d-none d-md-block">
                <div class="caption-box">
                    <h5>Our Services Technically Non-Existent!</h5>
                    <p>We don't have any Washing Machines, only this web ;-p</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="banners/banner6.jpg" alt="Third banner">
            <div class="carousel-caption d-none d-md-block">
                <div class="caption-box">
                    <h5>Just Go to the Pay Page or Logout!</h5>
                    <p>JUST PAY ALREADY OR GET OUT FROM MY WEBPAGE!!!!!!!</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#washingServiceCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#washingServiceCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>

<!-- Services Section -->
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Our Services Includes:</h2> <!-- Added mb-4 for spacing -->
    <div class="row text-center">
        <div class="col-md-3">
            <h4>Wash Dry</h4>
        </div>
        <div class="col-md-3">
            <h4>Wash and Ironing</h4>
        </div>
        <div class="col-md-3">
            <h4>Express Washing</h4>
        </div>
        <div class="col-md-3">
            <h4>Membership</h4>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="bg-dark text-light text-center py-3">
    &copy; 2024 UTS Laundry
</footer>

<script>
    // jQuery for slider with 3-second interval
    $(document).ready(function() {
        $('#washingServiceCarousel').carousel({
            interval: 3000 // 3 seconds
        });
    });
</script>

</body>

</html>
