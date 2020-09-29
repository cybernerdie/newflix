<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	
	<link rel="stylesheet" href="{{asset('css\bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('css\bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('css\owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css\jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('css\nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('css\ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('css\plyr.css')}}">
	<link rel="stylesheet" href="{{asset('css\photoswipe.css')}}">
	<link rel="stylesheet" href="{{asset('css\default-skin.css')}}">
	<link rel="stylesheet" href="{{asset('css\main.css')}}">
	<!-- Favicons -->
<link rel="icon" type="image/png" href="{{asset('img\logo.png')}}" sizes="32x32">
<link rel="apple-touch-icon" {{asset('img\logo.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Josh Paul">
    <title>NewFlix – Online Movies, TV Shows & Cinema</title>
    <livewire:styles>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="body">

	<!-- header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="{{ route('movies.index') }}" class="header__logo">
                        <img src="{{asset('img\logo.png')}}" alt="" style="width: 50%">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
	
							<li class="header__nav-item">
								<a href="{{ route('movies.index') }}" class="header__nav-link">Movies</a>
							</li>
							<li class="header__nav-item">
								<a href="{{ route('tv.index') }}" class="header__nav-link">TV Shows</a>
							</li>

							<li class="header__nav-item">
								<a href="{{ route('actors.index') }}" class="header__nav-link">Actors</a>
							</li>

						</ul>
						<!-- end header nav -->
						<!-- header auth -->
						<div class="header__auth">
								@livewire('search-dropdown')
						</div>
						
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>
    <!-- end header -->
    @yield('content')
    <livewire:scripts>
    @yield('scripts')
    <!-- footer -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="footer__content">
					<a href="index.html" class="footer__logo">
					<img src="{{asset('img\logo.png')}}" alt="" style="width: 50%">
					</a>

					<span class="footer__copyright">© 2020 NewFlix<br> Developed by <a href="https://github.com/Veecthorpaul" target="_blank">Joshua Paul</a></span>

					<button class="footer__back" type="button">
						<i class="icon ion-ios-arrow-round-up"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end footer -->

	<!-- JS -->
	
	<script src= "{{asset('js\jquery-3.5.1.min.js')}}"></script>
	<script src= "{{asset('js\bootstrap.bundle.min.js')}}"></script>
	<script src= "{{asset('js\owl.carousel.min.js')}}"></script>
	<script src= "{{asset('js\jquery.mousewheel.min.js')}}"></script>
	<script src= "{{asset('js\jquery.mCustomScrollbar.min.js')}}"></script>
	<script src= "{{asset('js\wNumb.js')}}"></script>
	<script src= "{{asset('js\nouislider.min.js')}}"></script>
	<script src= "{{asset('js\jquery.morelines.min.js')}}"></script>
	<script src= "{{asset('js\plyr.min.js')}}"></script>
	<script src= "{{asset('js\photoswipe.min.js')}}"></script>
	<script src= "{{asset('js\photoswipe-ui-default.min.js')}}"></script>
	<script src= "{{asset('js\main.js')}}"></script>
</body>
</html>