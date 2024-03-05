<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<title>Rekomendation Caffe</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="homepage"> <img class="d-inline-block align-top" src="{{ asset('images/LOGO.svg') }}" width="130" ></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
						<li class="nav-item {{ (request()->is('blog')) ? 'active' : '' }} "><a class="nav-link " href="{{ route('blog')}}">Cafe</a></li>
						<li class="nav-item {{ (request()->is('about')) ? 'active' : '' }} "><a class="nav-link" href="{{ route('about')}}">About us</a></li>
					
						<li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a class="nav-link " href="{{ route('contact')}}">Contact us</a></li>
					
                    </ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        @auth
                        <li><a class="nav-link" href="{{ route('logout')}}"><img src="{{ asset('images/logout.svg') }}" width="40"></a></li>
                           @else
                        <li><a class="nav-link" href="{{ route('login')}}"><img src="{{ asset('images/user.svg') }}"></a></li>
                      
                        @endauth
						
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->	
        
        @yield('content')

        	<!-- Start Footer Section -->
			<footer class="footer-section">
                <div class="container relative">
    
                    <div class="row g-5 mb-5">
                        <div class="col-lg-4">
                            <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">SPOTcoffe<span>.</span></a></div>
                            <p class="mb-4">Spot ngopi dan nongkrong yang instagramable di sekitaran Jawa Timur.</p>
    
                            <ul class="list-unstyled custom-social">
                                <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fa fa-brands fa-telegram"></span></a></li>
                            </ul>
                        </div>
    
                        <div class="col-lg-8">
                            <div class="row links-wrap">
                                <div class="col-6 col-sm-6 col-md-3">
                                    <ul class="list-unstyled">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                    
                            </div>
                        </div>
    
                    </div>
    
                    <div class="border-top copyright">
                        <div class="row pt-4">
                            <div class="col-lg-6">
                                <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">SPOTcoffe</a> 
                </p>
                            </div>
    
                            <div class="col-lg-6 text-center text-lg-end">
                                <ul class="list-unstyled d-inline-flex ms-auto">
                                    <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
    
                        </div>
                    </div>
    
                </div>
            </footer>
            <!-- End Footer Section -->	
    
            <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('js/tiny-slider.js') }}"></script>
            <script src="{{ asset('js/custom.js') }}"></script>
        </body>
    
    </html>
    