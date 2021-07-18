<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<div class="row">
	<div class="col-lg-5"></div>
	<div  class="col-lg-5 pull-center">
		<h2>Unique Service Center</h2>
	</div>
		<div class="col-lg-2"></div>
	</div>
<form style="" action="/booking" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}


	@if(Session::get('fail'))
	<div class="alert alert-danger">
		{{ Session::get('fail')}}
	</div>
	@endif

		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<label for="name">Name:</label>
				<input type="text" maxlength="150" class="form-control" id="name" placeholder="Enter full Name" name="name" required>

			</div>
			<div class="col-lg-4"></div>
		</div>
	</br>
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<label for="mobile">Mobile Number:</label>
			<input type="text" maxlength="10" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" required>

			</div>
			<div class="col-lg-4"></div>
		</div>
</br></br>
		<div class="row">
		<div class="col-sm-5"></div>
		<div class="col-sm-5">
			<button  type="submit" class="btn btn-primary">Submit</button>
		</div>
		<div class="col-sm-2"></div>
	</div>

</form>