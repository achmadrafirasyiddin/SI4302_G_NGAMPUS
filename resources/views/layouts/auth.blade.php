<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="{{asset('Auth/css/style.css')}}">

	</head>

	<body class="min-vh-100 justify-content-center align-items-center">
	
	@yield('content')
	

	<script src="{{asset('Auth/js/jquery.min.js')}}"></script>
	<script src="{{asset('Auth/js/popper.js')}}"></script>
	<script src="{{asset('Auth/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('Auth/js/main.js')}}"></script>

	</body>
</html>