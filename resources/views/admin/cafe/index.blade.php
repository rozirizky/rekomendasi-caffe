@extends('layout.adminlayout')
@section('content')

<div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Data Cafe</h6>
                           
                        </div>
                        <div class="card-body">
                            <a href="{{ route('cafe.create')}}" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"></i>Add Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Cafe</th>
                                            <th>Alamat</th>
                                            <th>No Telephone</th>
                                            <th>Jam</th>
                                            <th>Deskripsi</th>
                                            <th>Rating</th>
                                            <th>harga</th>
                                            <th>rating</th>
                                            <th>gambar</th>
                                            <th class="text-center">action</th>

                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @forelse ($cafe as $c)
                                              <tr>
                                            <td>{{  $loop->iteration}}</td>
                                            <td>{{  $c->cafe}}</td>
                                            <td>{{  $c->alamat}}</td>
                                            <td>{{  $c->telephone}}</td>
                                            <td>{{  $c->telephone}}</td>
                                            <td>{{  $c->jam}}</td>
                                            <td>{{  $c->deskripsi}}</td>
                                            <td>{{  $c->harga}}</td>
                                            <td>{{  $c->rating}}</td>
                                            <td><img src="{{ asset('storage/foto/'.$c->gambar1)  }}" width="50" alt="gambar"></td>
                                            <td><form action="{{ route('cafe.destroy',$c->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                            <a href="{{ route('cafe.edit',$c->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm" ><i class="fas fa-fw fa-trash"></i></button>
                                            </form></td>
                                           
                                        </tr>
                                        @empty
                                            <h2>Empty Data</h2>
                                        @endforelse
                                      
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
    
@endsection