@extends('layout.adminlayout')
@section('content')

<div class="container-fluid">

                 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 ">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Caffe</h6>
                        </div>
                        <div class="card-body p-5">
                            <form action="{{ route('cafe.update',$cafe->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf  
                              @method('put')
                              <div class="form-group">
                                  <label for="cafe">Nama Cafe</label>
                                  <input type="text" class="form-control" name="cafe" value="{{ $cafe->cafe }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat"  value="{{ $cafe->alamat }}" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="telephone">No Telephone</label>
                                    <input type="text" class="form-control" name="telephone"  value="{{ $cafe->telephone }}"  required>
                                  </div>
                                  <div class="form-group">
                                    <label for="jam">Jam buka</label>
                                    <input type="text" class="form-control" name="jam"   value="{{ $cafe->jam }}" required>
                                  </div>
                                <div class="form-group">
                                  <label for="deskripsi">Deskripsi</label>
                                  <textarea class="form-control" name="deskripsi" rows="3"  required>{{ $cafe->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input type="text" class="form-control" name="rating"  value="{{ $cafe->rating }}" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" name="harga"  value="{{ $cafe->harga }}" Hrequired>
                                  </div>
                                  <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" name="foto"  >
                                  </div>

                                  <button type="submit" class="btn btn-primary mt-2 btn-lg" >Submit</button>


                              </form>
                        </div>
                    </div>

                </div>
    
@endsection