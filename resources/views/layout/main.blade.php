<!doctype html>
<html lang="en">

	<head>
		@include('layout.partials.head')
	</head>

	<body class="warning">

		@include('layout.partials.nav')

		@yield('content')

		@include('layout.partials.social')

		@include('layout.partials.footer')

	</body>

	@include('layout.partials.scripts')

</html>