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
        .sidebar {
            height: 100vh;
            width: 250px;
            top: 0;
            left: 0;
            padding: 20px;
            position: fixed;
        }

        .sidebar a {
            margin-bottom: 10px;
            font-size: 14px;
            padding: 10px;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                padding-top: 20px;
            }

            .navbar {
                margin-top: 0;
            }
        }

        @media (min-width: 992px) {
            .custom-margin {
                margin-left: 10%;
           }
        }

        @media (max-width: 991.98px) {
            .custom-margin {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <div class="d-flex flex-column">
        <div class="sidebar bg-dark">
            <h5 class="text-center text-light">
                HealthCare Zone
            </h5>
            <hr style="border-bottom: 1px solid #dee2e6">
            <a href="/adminDashboard" class="text-light text-decoration-none d-block"><i class="bi bi-house"></i>Dashboard</a>
            <a href="/updateReviews" class="text-light text-decoration-none d-block"><i class="bi bi-pencil"></i>Update Reviews</i></a>
            <a href="/registerDoctor" class="text-light text-decoration-none d-block"><i class="bi bi-person-plus"></i>Register Doctor</a>
            <a href="/patients" class="text-light text-decoration-none d-block"><i class="bi bi-people"></i>Patients</a>
            <a href="/doctors" class="text-light text-decoration-none d-block"><i class="bi bi-people"></i>Doctors</a>
            <a href="/suggestion" class="text-light text-decoration-none d-block"><i class="bi bi-info-circle"></i>Suggestions</a>
        </div>

        <div class="main-content flex-grow-1">
            <nav class="navbar navbar-expand-md navbar-light border-bottom">
                <div class="container-fluid">

                    <!-- toggle button for mobile nav -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- navbar links -->
                    <div class="collapse navbar-collapse justify-content-end" id="main-nav">
                        <ul class="navbar-nav" style="font-size: 14px;">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/adminDashboard"><i class="bi bi-house-fill me-2"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">admin@gmail.com <i class="bi bi-box-arrow-right text-danger"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
