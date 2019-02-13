<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
	<section class="wrapper">
		@if(Auth::check())
			@include('includes.authHeader')
		@else
			@include('includes.header')
		@endif
	</section>  	
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
