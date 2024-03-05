<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Rekomendation Caffe</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="homepage">SPOTcoffe<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="/homepage">Home</a>
						</li>
						<li><a class="nav-link" href="/homepage.caffe">Caffe</a></li>
						<li><a class="nav-link" href="/homepage.about">About us</a></li>
						<li><a class="nav-link" href="/homepage.blog">Blog</a></li>
						<li><a class="nav-link" href="/homepage.contact">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

				<!-- Start Why Choose Us Section -->
				<div class="why-choose-section">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="img-wrap">
									<img src="images/blog-1.png" alt="Image" class="img-fluid">
								</div>
								<h2 class="section-title mt-3 text-center">Why Choose Us?</h2>
								
							</div>
							<div class="col-lg-6">
								<p>karena disini kami akan membantu anda untuk menemukan tempat tempat cafe yang aesthatic dan nyaman untuk nugas, ngopi sambil ngobrol santai bareng temen dan juga pacar anda.</p>
		
								<div class="row mt-5">
									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/camera.png" alt="Image" class="imf-fluid">
											</div>
											<h3>Aesthatic Spot</h3>
											<p>tentunya memiliki banyak sekali spot yang sangat aesthatic yang dapat membuat anda nyaman dan berfoto.</p>
										</div>
									</div>
		
									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/coffee-cup.png" alt="Image" class="imf-fluid">
											</div>
											<h3>Have Various Coffee Menus</h3>
											<p>memiliki berbagai macam menu kopi yang pasti anda suka, dan tidak hanya kopi minuman lainnya untuk yang tidak suka kopi juga ada.</p>
										</div>
									</div>
		
									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/support.svg" alt="Image" class="imf-fluid">
											</div>
											<h3>24/7 Support</h3>
											<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
										</div>
									</div>
		
									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/return.svg" alt="Image" class="imf-fluid">
											</div>
											<h3>Hassle Free Returns</h3>
											<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
										</div>
									</div>
		
								</div>
							</div>
		
							
		
						</div>
					</div>
				</div>
				
			
		<!-- End Why Choose Us Section -->
		<div class="container mb-5">
			<h2 class="text-center">Review</h2>
			<div class="row">
			
				<div class="col-lg-7">
				<div class="row">
			   <div class="col-lg-12 mt-4">
				<h5><i class="fas fa-fw fa-circle-user"></i> Moch Rozi Rizky</h5>
					 <div class="form-group row">
						<input type="hidden" name="booking_id" value="">
						<div class="col">
						   <div class="rated">
							@for($i=1; $i<=5; $i++)

							  {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
							  <label class="star-rating-complete" title="text">{{$i}} stars</label>
							@endfor
							</div>
						</div>
					 </div>
					 <div class="form-group row">
						<div class="col">
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error vel ad veritatis ab dicta quis, odio sunt quod a cupiditate assumenda nobis nesciunt eveniet, ipsum iusto vero repellat? Libero, incidunt.</p>
						</div>
					 </div>
			   </div>
			   <div class="col-lg-12 mt-4">
				<h5><i class="fas fa-fw fa-circle-user"></i> Moch Rozi Rizky</h5>
					 <div class="form-group row">
						<input type="hidden" name="booking_id" value="">
						<div class="col">
						   <div class="rated">
							@for($i=1; $i<=5; $i++)

							  {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
							  <label class="star-rating-complete" title="text">{{$i}} stars</label>
							@endfor
							</div>
						</div>
					 </div>
					 <div class="form-group row">
						<div class="col">
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error vel ad veritatis ab dicta quis, odio sunt quod a cupiditate assumenda nobis nesciunt eveniet, ipsum iusto vero repellat? Libero, incidunt.</p>
						</div>
					 </div>
			   </div>
			   
				</div>
			</div>
			<div class="col-lg-5">
			
					<form class="p-3" action="{{ route('ulasan')  }}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
					   @csrf
					
					   <div class="form-group row">
						  <input type="hidden" name="id_cafe" value="{{ $cafe->id }}">
						  <div class="col">
							 <div class="rate">
								<input type="radio" id="star5" class="rate" name="rating" value="5"/>
								<label for="star5" title="text">5 stars</label>
								<input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
								<label for="star4" title="text">4 stars</label>
								<input type="radio" id="star3" class="rate" name="rating" value="3"/>
								<label for="star3" title="text">3 stars</label>
								<input type="radio" id="star2" class="rate" name="rating" value="2">
								<label for="star2" title="text">2 stars</label>
								<input type="radio" id="star1" class="rate" name="rating" value="1"/>
								<label for="star1" title="text">1 star</label>
							 </div>
						  </div>
					   </div>
					   <div class="form-group row">
						  <div class="col">
							 <textarea class="form-control" name="ulasan" rows="6 " placeholder="Comment" maxlength="200"></textarea>
						  </div>
					   </div>
					   <div class="mt-3 text-end">
						  <button type="submit" class="btn btn-sm rounded-0 py-2 px-3 btn-info">Submit
						  </button>
					   </div>
					</form>
				
			</div>
		 </div>
		</div>
		
			
			
		
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

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
