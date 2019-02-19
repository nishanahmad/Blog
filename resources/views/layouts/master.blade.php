<!doctype html>
<html>
<head>
    @include('includes.head')
	<section class="wrapper">
		@if(Auth::check() && Request::is('author*'))
			@include('includes.authHeader')
		@else
			@include('includes.header')
		@endif
	</section>  		
</head>
<body>
	<section id="main-content">
	  <section class="wrapper">
			@yield('content')
	  </section>
	</section>  
	<section class="wrapper">
			@include('includes.footer')
	</section>  	
</body>
</html>
