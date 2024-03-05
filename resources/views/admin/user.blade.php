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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @forelse ($users as $u)
                                              <tr>
                                            <td>{{  $loop->iteration}}</td>
                                            <td>{{  $u->name}}</td>
                                            <td>{{  $u->email}}</td>
                                            @if($u->type === 'admin')
                                            <td>Admin</td>
                                            @else
                                            <td>User</td>
                                            @endif
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