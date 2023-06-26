<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Students</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Welcome</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.courses') }}">Courses</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.students') }}">Students</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Students</h1>
                    @if(session()->has('added'))
                <p class="display-5 text-success">{{session()->get('added')}}</p>
                @endif
                @if(session()->has('updated'))
                <p class="display-5 text-success">{{session()->get('updated')}}</p>
                @endif
                    <div class="position-fixed top-0 end-0 p-3">
                    <a href="{{ route('admin.new.student') }}" class="btn btn-primary float-right">Add New Student</a>
                </div>
                @if(session()->has('message'))
                <p class="display-5 text-success">{{session()->get('message')}}</p>
                @endif
                @if(session()->has('message3'))
                <p class="display-5 text-success">{{session()->get('message3')}}</p>
                @endif
                    <table class="table table-bordered table-hover text-center">
                       <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Course</th>
                            <th scope="col">Attendance</th>
                            <th scope="col" width="15%">Actions</th>
                        </tr>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->username }}</td>
                                <td>{{ $student->password }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->course }}</td>
                                <td>{{ $student->attendance }}</td>
                              <td>
                                <a href="{{ route('admin.edit.student',$student->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('admin.delete.student',$student->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                            div.footer
                            @endforeach
                          </tbody>
                    </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
