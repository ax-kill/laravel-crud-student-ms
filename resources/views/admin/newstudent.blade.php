<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<div class="row justify-content-center">
				<h2 class="display-1 text-center text-primary fw-bold">Add Student</h2>
				<div class="col-md-6">
				<form action="{{ route('admin.add.student') }}" method="post" class="card shadow opacity-75">
					@csrf
					<div class="form-group card-body">
						<label for="first_name">First Name:</label>
						<input type="text" class="form-control shadow" id="first_name" name="first_name" >
					</div>
					<div class="form-group card-body">
						<label for="last_name">Last Name:</label>
						<input type="text" class="form-control shadow" id="last_name" name="last_name" >
					</div>
					<div class="form-group card-body">
						<label for="email">Email:</label>
						<input type="email" class="form-control shadow" id="email" name="email" >
					</div>
                    <div class="form-group card-body">
						<label for="username">Username:</label>
						<input type="text" class="form-control shadow" id="username" name="username" >
					</div>
                    <div class="form-group card-body">
						<label for="password">Password</label>
						<input type="password" class="form-control shadow" id="password" name="password" >
					</div>
                    <div class="form-group card-body">
						<label for="email">Phone No:</label>
						<input type="text" class="form-control shadow" id="email" name="phone_number" >
					</div>
                    <div class="form-group card-body">
                    <label for="course">Course:</label>
                        <select class="form-control shadow" name="course" >
                        <option value="">Select a course</option>
                            @foreach($courses as $course)
                            <option value="{{ $course->name }}">{{ $course->name }}</option>
                         @endforeach
                        </select><br>
                    </div>
                    <div class="form-group card-body">
                    <label for="attendance">Attendance:</label>
                         <input class="form-control shadow" type="text" name="attendance"><br>
                    </div>
					<div class="text-center card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
    </div>
</body>
</html>
