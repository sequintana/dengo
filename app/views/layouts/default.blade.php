<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

	<header class="row">
			@include('includes.header')
	</header>	
	
	<div id="main" class="container starter-template">
			@yield('content')	
	
	</div>

	<footer>
			@include('includes.footer')
	</footer>

		@include('includes.scripts')

</body>
</html>