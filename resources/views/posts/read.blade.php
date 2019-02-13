@extends('layouts.master')
@section('content')
<style>
.sticky {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
<div class="hero-area section">
	<div class="bg-image bg-parallax overlay" style="background-image:url({{URL::to('images/blog.jpg')}})"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<ul class="hero-area-tree">
					<li><a href="index.html">Home</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li>{{$post->title}}</li>
				</ul>
				<h1 class="white-text">{{$post->title}}</h1>
				<ul class="blog-post-meta">
					<li class="blog-meta-author">By : <a href="#">{{ $post->name }}</a></li>
					<li>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</li>
					<li class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="blog" class="section">
	<div class="container">
		<div class="row">
			<div id="main" class="col-md-9">
				<div class="blog-post" style="overflow:auto;">
				{!!$post->description!!}
				</div>
				<div class="blog-share">
					<h4>Share This Post:</h4>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
				</div>
				<div class="blog-comments">
					<h3>5 Comments</h3>
					<div class="media">
						<div class="media-left">
							<img src="./img/avatar.png" alt="">
						</div>
						<div class="media-body">
							<h4 class="media-heading">John Doe</h4>
							<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
							<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="./img/avatar.png" alt="">
							</div>
							<div class="media-body">
								<h4 class="media-heading">John Doe</h4>
								<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
								<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="./img/avatar.png" alt="">
							</div>
							<div class="media-body">
								<h4 class="media-heading">John Doe</h4>
								<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
								<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
							</div>
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<img src="./img/avatar.png" alt="">
						</div>
						<div class="media-body">
							<h4 class="media-heading">John Doe</h4>
							<p>Cu his iudico appareat ullamcorper, at mea ignota nostrum. Nonumy argumentum id cum, eos adversarium contentiones id</p>
							<div class="date-reply"><span>Oct 18, 2017 - 4:00AM</span><a href="#" class="reply">Reply</a></div>
						</div>
					</div>
					<div class="blog-reply-form">
						<h3>Leave Comment</h3>
						<form>
							<input class="input name-input" type="text" name="name" placeholder="Name">
							<input class="input email-input" type="email" name="email" placeholder="Email">
							<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
							<button class="main-button icon-button">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div id="aside" class="col-md-3 sticky">
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
<div id='preloader'><div class='preloader'></div></div>
@stop
