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
    <title>Price Check</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('background/bkg3.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            position: relative;
        }

        /* Overlay to dim the background */
        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: -1;
        }

        /* Navbar style */
        .navbar-brand img {
            width: 30px;
            height: 30px;
        }

        /* Title container styling */
        .title-container {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 10px 20px;
            color: #fff;
            text-align: center;
        }

        /* Result container styling */
        #result {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            padding: 20px;
            color: #fff;
            display: none;
        }

        /* Ensure the body takes at least the entire viewport height */
        body, html {
            height: 100%;
        }

        /* Container styling */
        .content-container {
            padding-bottom: 50px; /* Give space for the footer */
            box-sizing: border-box;
        }

        /* Footer styling */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }

        /* Adjust form on smaller screens */
        @media (max-width: 768px) {
            .title-container h2 {
                font-size: 1.5rem;
            }
            #priceForm {
                padding: 15px;
            }
            #result h3 {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 576px) {
            .title-container h2 {
                font-size: 1.25rem;
            }
            #priceForm {
                padding: 10px;
            }
            #result h3 {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<!-- Overlay for dimming the background -->
<div class="background-overlay"></div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
        <img src="logo/logo.png" alt="UTS Laundry logo">
        UTS Laundry
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="price_check.php">Check Price</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<!-- Title Container -->
<div class="container my-5 text-center">
    <div class="title-container">
        <h2>Price Check</h2>
    </div>
</div>

<!-- Price Form and Result Container in a wrapper to manage layout -->
<div class="container content-container">
    <!-- Price Form -->
    <form id="priceForm" class="card p-4 shadow mt-4">
        <div class="form-group">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" class="form-control" name="weight" min="1" required>
        </div>
        <div class="form-group">
            <label for="service">Service:</label>
            <select id="service" class="form-control" name="service">
                <option value="wash_dry">Wash Dry</option>
                <option value="wash_iron">Wash and Ironing</option>
                <option value="iron_only">Ironing Only</option>
            </select>
        </div>
        <div class="form-group">
            <label>Type:</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" id="regular" class="form-check-input" name="type" value="regular" checked>
                <label class="form-check-label" for="regular">Regular</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" id="express" class="form-check-input" name="type" value="express">
                <label class="form-check-label" for="express">Express</label>
            </div>
        </div>
        <div class="form-group">
            <label>Membership:</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" id="non_member" class="form-check-input" name="membership" value="non_member" checked>
                <label class="form-check-label" for="non_member">Non-Member</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" id="member" class="form-check-input" name="membership" value="member">
                <label class="form-check-label" for="member">Member</label>
            </div>
        </div>

        <button type="button" class="btn btn-primary btn-block" onclick="calculatePrice()">Calculate</button>
    </form>

    <!-- Result Container -->
    <div id="result" class="mt-4 text-center"></div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light text-center py-3">
    &copy; 2024 UTS Laundry
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function calculatePrice() {
        let weight = document.getElementById('weight').value;
        let service = document.getElementById('service').value;
        let type = document.querySelector('input[name="type"]:checked').value;
        let membership = document.querySelector('input[name="membership"]:checked').value;

        let pricePerKg = 0;
        switch(service) {
            case "wash_dry": pricePerKg = 5000; break;
            case "wash_iron": pricePerKg = 7000; break;
            case "iron_only": pricePerKg = 4000; break;
        }

        if (type === "express") {
            pricePerKg += 2000; // Express costs an extra 2000
        }

        let total = weight * pricePerKg;

        if (membership === "member") {
            total *= 0.9; // Members get 10% discount
        }

        // Display the result and show the container
        let resultContainer = document.getElementById('result');
        resultContainer.innerHTML = `<h3>Total Price: Rp ${total.toFixed(2)}</h3>`;
        resultContainer.style.display = "block"; // Show the result container together with the text
    }
</script>

</body>
</html>
