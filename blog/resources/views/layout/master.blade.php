<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
	<h1>Heading</h1>
	<div>
		<h2>Navigation</h2>
		<ul>
			<li>Link 1</li>
			<li>Link 2</li>
		</ul>
	</div>

	<div>
		<h2>content goes here</h2>
		@yield('main_content')
	</div>

	<div>
		<h2>footer goes here</h2>
	</div>

</body>
</html>