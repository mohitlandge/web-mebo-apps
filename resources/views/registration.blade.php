@include('welcome')

<div class="row">
	<h2 class="text-center">Sign Up To our website</h2></div>
</br>
<form style="border-style:dotted; border-width: 1px;" action="/users" method="post" enctype="multipart/form-data">
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
		<div class="col-sm-6">
			<label for="first_name">First Name:</label>
			<input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" required>
		</div>
		<div class="col-sm-6">
			<label for="last_name">Last Name:</label>
			<input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" required>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-6">
			<label for="email">Role</label>
			<select  class="form-control mandatory" required name="role_id" id="role_id" @yield('organization_name_d')>
				@if(isset($roles))
				<option value="0">--select--</option>'
				@foreach($roles as $role)
				@isset($role_id)
				@if($role->id === $role_id)
				<option value="{{$role->id}}" selected>{{$role->name}}</option>
				@else
				<option value="{{$role->id}}">{{$role->name}}</option>
				@endif
				@endisset
				@if(!empty(old('organization_name')))
				@if($role->id === old('organization_name'))
				<option value="{{$role->id}}" selected>{{$role->name}}</option>
				@else
				<option value="{{$role->id}}">{{$role->name}}</option>
				@endif
				@else
				<option value="{{$role->id}}">{{$role->name}}</option>
				@endif
				@endforeach
				@endif
			</select>
		</div>
		<div class="col-sm-6">
			<label for="contact_id">Contact No:</label>
			<input type="text" class="form-control" maxlength="10" id="contact_id" placeholder="Enter Contact" name="contact_id" required>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-sm-6">
			<label for="email_id">Email:</label>
			<input type="text" class="form-control" id="contact_id" placeholder="Enter Email" name="email_id" required>
		</div>
		<div class="col-sm-6">
			<label for="password_id">Password:</label>
			<input type="text" maxlength="12" class="form-control" id="password_id" placeholder="Enter Address" name="password_id" required>
		</div>
	</div>
	<br><br>

	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-4">
			<button  type="submit" class="btn btn-primary">Submit</button>
		</div>
		<div class="col-sm-2"></div>
	</div>
</form>
