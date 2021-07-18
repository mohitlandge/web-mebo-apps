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
<form style="" action="/cancel_booking" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
<h4>{{$msg}}</h4>

<table class="table table-bordered">
    <thead>

    <input type="hidden" name="booking_id" value="{{ $booking_id}}">
      <tr>
        <th>Appointment Token</th>
        <th>Attendee Name</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Delete Appointment</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $appointment_token}}</td>
        <td>{{ $attendee_name}}</td>
        <td>{{ $start_date_time}}</td>
        <td>{{ $end_date_time}}</td>
        <td><button type="submit" class="btn btn-danger">Cancel Appointment</button></td>
      </tr>
    </tbody>
  </table>

</form>

