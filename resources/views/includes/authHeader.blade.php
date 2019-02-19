<style>
@import 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans';
.navbar-brand {
  font-family: 'Montserrat', sans-serif;
  text-transform: uppercase
}

.navbar .nav {
  font-family: 'Open Sans', sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 1.2rem
}

.navbar-inverse {
  background-color: #003300
}

.navbar-inverse .navbar-nav>.active>a:hover,
.navbar-inverse .navbar-nav>li>a:hover,
.navbar-inverse .navbar-nav>li>a:focus {
  background-color: #002200
}

.navbar-inverse .navbar-nav>.active>a,
.navbar-inverse .navbar-nav>.open>a,
.navbar-inverse .navbar-nav>.open>a,
.navbar-inverse .navbar-nav>.open>a:hover,
.navbar-inverse .navbar-nav>.open>a,
.navbar-inverse .navbar-nav>.open>a:hover,
.navbar-inverse .navbar-nav>.open>a:focus {
  background-color: #003300
}

.dropdown-menu {
  background-color: #006B00
}

.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus {
  background-color: #002200
}

.navbar-inverse {
  background-image: none;
}

.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus {
  background-image: none;
}

.navbar-inverse {
  border-color: #003300
}

.navbar-inverse .navbar-brand {
  color: #FFFFFF
}

.navbar-inverse .navbar-brand:hover {
  color: #FFCC00
}

.navbar-inverse .navbar-nav>li>a {
  color: #FFFFFF
}

.navbar-inverse .navbar-nav>li>a:hover,
.navbar-inverse .navbar-nav>li>a:focus {
  color: #FFCC00
}

.navbar-inverse .navbar-nav>.active>a,
.navbar-inverse .navbar-nav>.open>a,
.navbar-inverse .navbar-nav>.open>a:hover,
.navbar-inverse .navbar-nav>.open>a:focus {
  color: #FFCC00
}

.navbar-inverse .navbar-nav>.active>a:hover,
.navbar-inverse .navbar-nav>.active>a:focus {
  color: #FFCC00
}

.dropdown-menu>li>a {
  color: #FFFFFF
}

.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus {
  color: #FFCC00
}

.navbar-inverse .navbar-nav>.dropdown>a .caret {
  border-top-color: #FFFFFF
}

.navbar-inverse .navbar-nav>.dropdown>a:hover .caret {
  border-top-color: #FFFFFF
}

.navbar-inverse .navbar-nav>.dropdown>a .caret {
  border-bottom-color: #FFFFFF
}

.navbar-inverse .navbar-nav>.dropdown>a:hover .caret {
  border-bottom-color: #FFFFFF
}
</style>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="./" class="navbar-brand">Author Page</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{route('home')}}">Blog Home</a>
        </li>
        <li>
          <a href="{{ route('author.home') }}">Posts</a>
        </li>
		<li><a class="logout" <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>		
        </li>
      </ul>
    </nav>
  </div>
</header>