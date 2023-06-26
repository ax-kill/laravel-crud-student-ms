<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<div class="row justify-content-center">
				<h2 class="display-1 text-center text-primary fw-bold">Admin Log In</h2>
				<div class="col-md-6">
				<form action="{{ route('admin.do.login') }}" method="post" class="card shadow opacity-75">
					@csrf
					<div class="form-group card-body">
						<label for="username">Username</label>
						<input type="text" class="form-control shadow" id="username" name="username">
					</div>
					<div class="form-group card-body">
						<label for="password">Password</label>
						<input type="password" class="form-control shadow" id="password" name="password">
                        <div class="form-check card-body">
                            <input class="form-check-input" type="checkbox" name="remember" value="1" id="remember" >
                            <label class="form-check-label" for="remember"> Remember me </label>
                          </div>
                    </div>

                    <div class="text-center card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					</div>
                    <div class="position-fixed top-0 end-0 p-3">
                        <a href="{{ route('student.login') }}" class="btn btn-primary float-right">Student Login</a>
                    </div>

</form>

</div>
</div>
</div>
</body>
</html>
