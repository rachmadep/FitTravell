@extends('layouts.admin')
{{-- Page title --}}
@section('title', 'Orders')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data Order</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                {{-- <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters
                </button> --}}
                {{-- <button class="au-btn au-btn-icon au-btn-filter au-btn--small" data-toggle="modal" data-target="#destination"><i class="zmdi zmdi-pin-drop"></i> Manage Destination</button>
                <button class="au-btn au-btn-icon au-btn-filter au-btn--small" data-toggle="modal" data-target="#category"><i class="zmdi zmdi-tag"></i> Manage Tour Category</button> --}}
            </div>
            {{-- <div class="table-data__tool-right">
                <a href="/adm/tour/create" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i> Create Tour</a>
                
            </div> --}}
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>by</th>
                        <th>tour</th>
                        <th>departure</th>
                        <th>price</th>
                        <th>status</th>
                        <th>Verification</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $value)
                    <tr class="tr-shadow">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->user->implode('name') }}</td>
                        <td>{{ $value->tour->implode('name') }}</td>
                        <td>{{ $value->departur }}</td>
                        <td class="desc">{{ $value->tour->implode('price') }}</td>
                        <td>{{ $value->payment }}
                        <td>Null
                        </td>

                        <td>
                            <div class="table-data-feature">
                                {{-- <a href="/adm/tour/edit/{{ $tour->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href="/adm/tour/delete/{{ $tour->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a> --}}
                                <span data-toggle="modal" data-target="#review">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="review">
                                    <i class="zmdi zmdi-eye"> </i>
                                </button></span>
                                
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>

<!-- Manage Category modal -->
<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Payment Verification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="table-responsive table--no-card m-b-30">
                          <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                  <th>Payment deadline</th>
                                  <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>2018-12-31</td>
                                  <td>Rp 8.000.000</td>
                                </tr>
                            </tbody>

                          </table>
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                       <div class="card">
                            <img class="card-img-top" src="/img/proof/contoh.jpg" alt="Card image cap">
                            <div class="card-body">
                                <button class="btn btn-responsive btn-primary btn-md">Verified</button>
                            </div>
                        </div> 
                    </div>
                </div>
               
                {{-- <hr> --}}

                {{-- <h5>Create Category</h5><br>
                <form class="form-horizontal" action="/adm/tour-category/store" method="POST">
                    @csrf
                    <fieldset>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Category</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="name" name="name" placeholder="Category Name" class="form-control">
                            </div>
                        </div>
                          
                        <div class="row form-group">
                              <div class="col-md-12 text-right">
                                <input type="hidden" name="_method" value="POST">
                                <button type="submit" class="btn btn-responsive btn-primary btn-sm">Verified</button>
                              </div>
                          </div>
                      </fieldset>
                  </form> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- end Manage Category modal -->
@endsection