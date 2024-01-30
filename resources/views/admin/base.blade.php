<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coaching Management System - Admin Panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
            padding: 0;
            margin: 0;
        }

        .sidebar {
            background-color: #343a40;
            color: #ffffff;
            height: 100vh;
            /* width: 250px; */
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            transition: all 0.3s;

        }

        .sidebar a {
            color: #ffffff;
            padding: 15px 20px;
            text-decoration: none;
            display: block;
            font-size: 18px;
            margin-left: 0px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: white;
            color: black;
        }

        .content {
            margin-left: 200px;
            padding: 15px;
            transition: all 0.3s;
        }

        .toggle-btn {
            /* position: fixed; */
            /* top: 10px; */
            /* left: 10px; */
            display: block;
            margin-top: 5px;
            cursor: pointer;
        }

        .navbar-toggler {
            color: #ffffff;
            border-color: #ffffff;
        }
        @media (max-width:600px){
          .gayab{
            display: none;
          }
        }

        @media (max-width:768px) {
          .gayab{
            display: none;
          }
          .midder{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
          }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar gayab">
                <div class="position-sticky">
                    <h2 class="text-center">Coaching MS Admin</h2>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.index') }}">
                                <i class="fas fa-home"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.manage.student') }}">
                                <i class="fas fa-user-graduate"></i> Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.manage.category') }}">
                                <i class="fas fa-book"></i> Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.manage.course') }}">
                                <i class="fas fa-book"></i> Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar"></i> Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cogs"></i> Settings
                            </a>
                        </li>
                        <!-- Add more links as needed -->
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content midder">

                <!-- Page content goes here -->
                <!-- Toggle button -->
                <div class="d-flex bg-dark text-light items-center px-3 py-1 mb-3 justify-content-between">
                    <div class="toggle-btn">
                        <i class="fas fa-bars fa-2x" id="sidebarToggle"></i>
                    </div>
                    <h2>Dashboard</h2>
                </div>

                

                <!-- Your content goes here -->
                @section('content')

                @show

            </main>
        </div>

    </div>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- jQuery for sidebar toggle -->
    <script>
        $(document).ready(function() {
            $("#sidebarToggle").click(function() {
                $("#sidebar, .content").toggleClass("collapse");
            });
        });
    </script>
</body>

</html>
