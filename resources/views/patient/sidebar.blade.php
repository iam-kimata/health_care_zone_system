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

        .chat-box {
            max-height: 500px;
            overflow-y: auto;
        }

        .message {
            margin-bottom: 15px;
        }

        .message .user {
            font-weight: bold;
        }

        .message .text {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 10px;
        }

        .chat-input {
            border-top: 1px solid #ddd;
            padding: 10px;
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
            <a href="/dashboard" class="text-light text-decoration-none d-block"><i class="bi bi-house"></i>Dashboard</a>
            <a href="/feedback" class="text-light text-decoration-none d-block"><i class="bi bi-chat-left-text"></i>Feedback</a>
            <a href="/warningPatientPage" class="text-light text-decoration-none d-block"><i class="bi bi-exclamation-triangle-fill"></i>Warning</a>
            <a href="/patientSuggestion" class="text-light text-decoration-none d-block"><i class="bi bi-info-circle"></i>Suggestions</a>
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
                                <a class="nav-link text-dark" href="/dashboard"><i class="bi bi-house-fill me-2"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/changePassword"><i class="bi bi-lock-fill me-2"></i>Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">kimata@gmail.com <i class="bi bi-box-arrow-right text-danger"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cKVR4hYo4a/3z7+V1WzPogbN4vs8I49L4+JAv6AX/n1RMvFgi2/oi/6vgEl1eAJf" crossorigin="anonymous"></script>
</body>
</html>
