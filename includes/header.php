<?php
// includes/header.php


$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV Mounting Experts | Professional TV Installation</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="tts-header shadow-sm sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <!-- Text Logo -->
            <a class="navbar-brand text-white fw-bold" href="index.php">
                <h3 class="mb-0"><i class="fa-solid fa-tv me-2"></i>TV Experts</h3>
            </a>

            <!-- Mobile toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto gap-lg-3">
                    <!-- Home (Yeh index.php aur khali link dono par active rahega) -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'index.php' || $currentPage == 'tv-mounting' || $currentPage == '') ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>" href="services.php">Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'faq.php') ? 'active' : ''; ?>" href="faq.php">FAQ</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'privacy.php') ? 'active' : ''; ?>" href="privacy.php">Privacy</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'terms.php') ? 'active' : ''; ?>" href="terms.php">Terms</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'disclaimer.php') ? 'active' : ''; ?>" href="disclaimer.php">Disclaimer</a>
                    </li>
                </ul>

                <!-- CTA buttons (Bilkul same) -->
                <div class="d-flex align-items-center gap-2">
                    <a href="tel:+12125551234" class="btn btn-outline-light btn-sm">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <a href="contact.php" class="btn btn-warning btn-sm px-4 fw-semibold">
                        Book Now
                    </a>
                </div>
            </div>

        </div>
    </nav>
</header>

<main>