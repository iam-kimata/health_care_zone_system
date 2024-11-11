<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>HealthCare Zone</title>
    <style>
        @media (max-width: 576px) {
            #about {
                padding-top: 11rem;
            }
        }
    </style>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-xxl">
            <a href="#home" class="navbar-brand">
                <span class="fw-bold text-dark">
                    <i class="bi bi-h-square"></i>
                    HealthCare Zone
                </span>
            </a>

            <!-- toggle button for mobile nav -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="#main-nav" aria-expanded="false" aria-label="Toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="#services">Our Services</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="#register">Register</a>
                    </li>
                    <li class="nav-item ms-2 d-none d-md-inline">
                        <a class="btn btn-secondary" href="#register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
