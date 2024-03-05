@extends('layout.adminlayout')
@section('content')

<div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Data Cafe</h6>
                           
                        </div>
                        <div class="card-body">
                          
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User</th>
                                            <th>Rating</th>
                                            <th>Ulasan</th>
                                            <th>Cafe</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @forelse ($ulasan as $u)
                                              <tr>
                                            <td>{{  $loop->iteration}}</td>
                                            <td>{{  $u->user}}</td>
                                            <td class="text-warning">@for ($i = 0; $i < $u->rating; $i++)
                                                <i class="fas fa-fw fa-star"></i> 
                                                    @endfor</td>
                                            <td>{{  $u->ulasan}}</td>
                                            <td>{{  $u->cafe->cafe}}</td>
                                            
                                            

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