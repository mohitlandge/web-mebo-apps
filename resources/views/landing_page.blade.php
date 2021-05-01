<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body class="antialiased">

    {{-- <h2 style="align-content: center;">Webo Mind Apps</h2> --}}
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Webo Mind Apps</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li ><a href="/home">Home</a></li>
      <li><a href="/registration">Registration</a></li> -->
      <li><a href="/logout">Logout</a></li>
      <!-- <li><a href="/forgot_password">Forgot Password</a></li> -->
    </ul>
  </div>
</nav>

</body>
</html>
