<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<div class="row justify-content-center">
				<h2 class="display-1 text-center text-primary fw-bold">Add Course</h2>
				<div class="col-md-6">
				<form action="{{ route('admin.add.course') }}" method="post" class="card shadow opacity-75">
					@csrf
					<div class="form-group card-body">
						<label for="coursename">Course Name</label>
						<input type="text" class="form-control shadow" id="coursename" name="coursename">
                    </div>
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
