<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>

	<div>
		@yield('main_content')
	</div>

</body>
</html>