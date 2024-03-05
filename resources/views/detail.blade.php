@extends('layout.homelayout')
@section('content')
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{ asset('storage/foto/'.$cafe->gambar1) }}" alt="Image" class="img-fluid">
                </div>
                
                
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">{{ $cafe->cafe}}</h2>
               
                <p>{{ $cafe->deskripsi }}</p>

                <div class="row mt-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                           <h2><i class="fas fa-fw fa-map-location-dot"></i> </h2> 
                            <h3>Alamat</h3>
                            <p>{{ $cafe->alamat }}</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="feature">
                           <h2><i class="fas fa-fw fa-phone"></i> </h2> 
                            <h3>No Telephone</h3>
                            <p>{{ $cafe->telephone }}</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="feature">
                           <h2><i class="fas fa-fw fa-clock"></i> </h2> 
                            <h3>Jam Buka</h3>
                            <p>{{ $cafe->jam }}</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="feature">
                           <h2><i class="fas fa-fw fa-tag"></i> </h2> 
                            <h3>Harga</h3>
                            <p>{{ $cafe->harga }}</p>
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
    @forelse ($ulasan as $u)
<div class="col-lg-12 mt-4 ">
    <div class="row">
        <div class="col-sm-6">
        <h5><i class="fas fa-fw fa-circle-user"></i> {{ $u->user}}</h5>
        </div>
        <div class="col-sm-6">
            <p>{{ \Carbon\Carbon::parse($u->created_at)->format('d M Y')}}</p>
        </div>
    </div>

     <div class="form-group row">
        
        <div class="col">
           <div class="rated">
            @for($i=1; $i<= $u->rating; $i++)

              <label class="star-rating-complete" title="text">{{$i}} stars</label>
            @endfor
            </div>
        </div>
     </div>
     <div class="form-group row">
        <div class="col">
            <p>{{ $u->ulasan}}</p>
        </div>
     </div>
</div>

@empty
<h5>Ulasan Tidak Tersedia</h5>
@endforelse


</div>
</div>
<div class="col-lg-5">

    <form class="p-3" action="{{ route('ulasan.store') }}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
       @csrf
    
       <div class="form-group row">
          <input type="hidden" name="id" value="{{ $cafe->id }}">
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
        @auth
        <button type="submit" class="btn btn-sm rounded-0 py-2 px-3 btn-info">Submit
        </button>

        @else
        <a href="{{ route('login')}}" class="btn btn-sm rounded-0 py-2 px-3 btn-info">Submit
        </a>
        @endauth
          
       </div>
    </form>

</div>
</div>
</div>



		@endsection