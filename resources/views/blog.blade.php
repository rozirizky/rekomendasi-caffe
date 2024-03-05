@extends('layout.homelayout')
@section('content')
	

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				
				<div class="row">
@foreach ($cafe as $c)

					<div class="col-12 col-sm-6 col-md-4 mb-5">
						<div class="post-entry border shadow">
							<a href="keterangan.cr" ><img src="{{ asset('storage/foto/'.$c->gambar1)}}" alt="Image" class="img-fluid"></a>
							
							<div class="post-content-entry p-4">
								<div class="row">
									<div class="col-md-6">
										<h3 class="product-title">{{ $c->cafe}}</h3>
									</div>
									<div class="col-md-6 text-end text-warning">
										@for ($i = 0; $i < $c->rating; $i++)
									<i class="fas fa-fw fa-star"></i> 
										@endfor
									</div>
								</div>
								<p>{{ Str::limit($c->deskripsi,120
								) }}</p>
							
								<div class="meta ">
									<span><a class="btn btn-secondary rounded-0" href="{{ route('detail',$c->id) }}">Read More</a></span>
								</div>
							</div>
						</div>
					</div>
						
@endforeach

					

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	
		@endsection