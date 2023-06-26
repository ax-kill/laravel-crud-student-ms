<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Student dashboard</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">

            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Student dashboard</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('student.dashboard') }}">Dashboard</a>

                </div>
            </div>

            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('student.logout') }}">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid">
                    <h1 class="mt-4">Welcome {{ $student->username }}</h1>
                    <div class="card col-md-6">
                        <div class="card-header">
                            Your Profile
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                            <p class="card-text">Email: {{ $student->email }}</p>
                            <p class="card-text">Username: {{ $student->username }}</p>
                            <p class="card-text">Phone Number: {{ $student->phone }}</p>
                            <p class="card-text">Course: {{ $student->course }}</p>
                            <p class="card-text">Phone Number: {{ $student->phone }}</p>
                            <p class="card-text">Your Attendance is: {{ $student->attendance }}%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
       
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
