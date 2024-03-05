@extends('layout.adminlayout')
@section('content')

<div class="container-fluid">

                 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 ">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Data Caffe</h6>
                        </div>
                        <div class="card-body p-5">
                            <form action="{{ route('cafe.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf  
                              <div class="form-group">
                                  <label for="cafe">Nama Cafe</label>
                                  <input type="text" class="form-control" name="cafe"  required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat"  required>
                                  </div>
                                  <div class="form-group">
                                    <label for="telephone">No Telephone</label>
                                    <input type="text" class="form-control" name="telephone"  required>
                                  </div>
                                  <div class="form-group">
                                    <label for="jam">Jam buka</label>
                                    <input type="text" class="form-control" name="jam"  required>
                                  </div>
                                <div class="form-group">
                                  <label for="deskripsi">Deskripsi</label>
                                  <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input type="text" class="form-control" name="rating"  required>
                                  </div>
                                  <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" name="harga" Hrequired>
                                  </div>
                                  <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" name="foto"  required>
                                  </div>

                                  <button type="submit" class="btn btn-primary mt-2 btn-lg" >Submit</button>


                              </form>
                        </div>
                    </div>

                </div>
    
@endsection