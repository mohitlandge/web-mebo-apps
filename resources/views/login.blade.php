@include('welcome')

<div class="row">
	<div class="col-lg-5"></div>
	<div  class="col-lg-5 pull-center">
		<h2>Login</h2>
	</div>
		<div class="col-lg-2"></div>
	</div>
<form style="border-style:dotted; border-width: 1px;" action="/login" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}


	@if(Session::get('fail'))
	<div class="alert alert-danger">
		{{ Session::get('fail')}}
	</div>
	@endif

		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<label for="email_id">Email:</label>
				<input type="email" class="form-control" id="email_id" placeholder="Enter Email" name="email_id" required>

			</div>
			<div class="col-lg-4"></div>
		</div>
	</br>
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<label for="password_id">Password:</label>
			<input type="text" maxlength="12" class="form-control" id="password_id" placeholder="Enter Address" name="password_id" required>

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