@extends('layouts.master')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
<div class="hero-area section">
	<div class="bg-image bg-parallax overlay" style="background-image:url({{URL::to('images/blog.jpg')}})"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<ul class="hero-area-tree">
					<li><a href="index.html">Home</a></li>
					<li>Blog</li>
				</ul>
				<h1 class="white-text">Blog Page</h1>

			</div>
		</div>
	</div>

</div>
<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div id="main" class="col-md-9">
				<div class="row">
					@foreach($posts as $post)
						<div class="col-md-6">
							<div class="single-blog">
								<div class="blog-img">
									<a href="{{'post/'.$post->id}}">
										<img src="{{URL::to('images/'.$post->thumbnail)}}" alt="">
									</a>
								</div>
								<h4><a href="{{'post/'.$post->id}}">{{ $post->title }}</a></h4>
								<div class="blog-meta">
									<span class="blog-meta-author">By: <a href="#">{{ $post->name }}</a></span>
									<div class="pull-right">
										<span>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</span>
										<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>

				<div class="row">
					<!-- pagination -->
					<div class="col-md-12">
						<div class="post-pagination">
								<nav class="post-pagination">
									{{ $posts->links() }}
								</nav>
						</div>
					</div>
					<!-- pagination -->
				</div>
			</div>
			<div id="aside" class="col-md-3">
				<div class="widget category-widget">
					<h3>Categories</h3>
					<a class="category" href="#">Web <span>12</span></a>
					<a class="category" href="#">Css <span>5</span></a>
					<a class="category" href="#">Wordpress <span>24</span></a>
					<a class="category" href="#">Html <span>78</span></a>
					<a class="category" href="#">Business <span>36</span></a>
				</div>

				<div class="widget tags-widget">
					<h3>Tags</h3>
					<a class="tag" href="#">Web</a>
					<a class="tag" href="#">Photography</a>
					<a class="tag" href="#">Css</a>
					<a class="tag" href="#">Responsive</a>
					<a class="tag" href="#">Wordpress</a>
					<a class="tag" href="#">Html</a>
					<a class="tag" href="#">Website</a>
					<a class="tag" href="#">Business</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id='preloader'>
	<div class='preloader'></div>
</div>
@stop