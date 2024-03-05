@extends('layout.homelayout')
@section('content')
	
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Caffe Rekomendation<span clsas="d-block"></span></h1>
								<p class="mb-4">Membantu anda untuk menemukan spot cafe yang instagramable dan  memiiliki harga yang terjangkau</p>
								<p><a href="homepage.blog" class="btn btn-secondary me-2">Explore</a><a href="#"></a></p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hero-img-wrap">
								<img src="{{asset ('images/coffe.png')}}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-15 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Bestseller Caffe in JaTim</h2>
						<p class="mb-4">spot coffe aesthatic and hidden gem yang ada di kota malang, yang bikin kamu betah</p>
						<p><a href="homepage.caffe" class="btn btn-secondary me-2">Explore</a><a href="#"></a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="https://www.google.com/maps/dir/-7.9660355,112.6437253/lafayette/@-7.9717984,112.6251916,14.64z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e789d1c23f14117:0xa5bde71a6ddec06f!2m2!1d112.629236!2d-7.9762215?entry=ttu">
							<img src="images/lafayette.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Lafayette Coffee & Eatery</h3>

							<span class="icon-cross">
								<img src="images/route2.png" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="https://www.google.com/maps/dir//critasena/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2dd629b758cab76d:0x75b892128321c6a8?sa=X&ved=2ahUKEwjXhqnP_tOCAxUR1TgGHdJUD-4Q9Rd6BAhCEAA">
							<img src="images/critasena.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">CR / Critasena</h3>

							<span class="icon-cross">
								<img src="images/route2.png" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="https://www.google.com/maps/place/Starbucks+Coffee+Plaza+Araya/@-7.9364922,112.6483702,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd6294882c639df:0x563a185bed750528!8m2!3d-7.9364922!4d112.6509451!16s%2Fg%2F11gtzdgd4k?hl=id&entry=ttu">
							<img src="images/starbuck.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Starbucks Araya</h3>

							<span class="icon-cross">
								<img src="images/route2.png" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us?</h2>
						<p>karena disini kami akan membantu anda untuk menemukan tempat tempat cafe yang aesthatic dan nyaman untuk nugas, ngopi sambil ngobrol santai bareng temen dan juga pacar anda.</p>

						<div class="row my-5">
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

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/coffe.jpeg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/zocco-sulfat.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="images/mera.jpeg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="images/nakoa-dinoyo.jpeg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">Hihi Sahabat SPOTcoffe</h2>
						<p>Disini kalian bisa mengekspor berbagai caffe dengan spot yang keren dan aesthatic buat foto dan tempat nongkrong hidden gem yang dijamin dapat membuat kalian makin betah buat nongkrong asik bareng teman, bestie atau circle kalian, dan juga bareng pacar loh dijamin makin romantis deh.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Tempat nongkrong terbaik</li>
							<li>Spot spot aesthatic dan keren</li>
							<li>Tempat yang nyaman dan bersih</li>
							<li>Caffe rasa bintang 5 harga tetap murah</li>
						</ul>
						<p><a href="homepage.blog" class="btn btn-secondary me-2">Explore</a><a href="#"></a></p>
					</div>
				</div>
			</div>
		</div>

@endsection