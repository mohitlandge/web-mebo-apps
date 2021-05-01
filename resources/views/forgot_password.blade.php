@include('welcome')

<div class="row">
	<div class="col-lg-5"></div>
	<div class="col-lg-5">
		<h2>Forgot Password</h2></div>
	<div class="col-lg-2"></div>
</div>

<form style="border-style:dotted; border-width: 1px;" action="/forgot_password" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}


	@if(Session::get('success'))
	<div class="alert alert-success">
		{{ Session::get('success')}}
	</div>
	@endif

	@if(Session::get('fail'))
	<div class="alert alert-danger">
		{{ Session::get('fail')}}
	</div>
	@endif

		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<label for="email_id">Email:</label>
				<input type="text" class="form-control" id="email_id" placeholder="Enter Email" name="email_id" required>

			</div>
			<div class="col-lg-4"></div>
		</div>
	</br>
</br></br>
		<div class="row">
		<div class="col-sm-5"></div>
		<div class="col-sm-5">
			<button  type="submit" class="btn btn-primary">Send Email</button>
		</div>
		<div class="col-sm-2"></div>
	</div>

</form>