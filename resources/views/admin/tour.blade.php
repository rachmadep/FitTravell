@extends('layouts.admin')
{{-- Page title --}}
@section('title', 'Tours')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                {{-- <button class="au-btn-filter">
                    <i class="zmdi zmdi-filter-list"></i>filters
                </button> --}}
                <button class="au-btn au-btn-icon au-btn-filter au-btn--small" data-toggle="modal" data-target="#destination"><i class="zmdi zmdi-pin-drop"></i> Manage Destination</button>
                <button class="au-btn au-btn-icon au-btn-filter au-btn--small" data-toggle="modal" data-target="#category"><i class="zmdi zmdi-tag"></i> Manage Tour Category</button>
            </div>
            <div class="table-data__tool-right">
                <a href="/adm/tour/create" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i> Create Tour</a>
                
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>destination</th>
                        <th>category</th>
                        <th>price</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                    <tr class="tr-shadow">
                        <td>{{ $tour->id }}</td>
                        <td>{{ $tour->name }}</td>
                        <td>{{ $tour->destination->implode('name') }}</td>
                        <td>
                            @foreach ($tour->category as $categoryss)
                                @foreach ($categoryss->categoryname as $categorynames)
                                    {{ $categorynames->name }} <br> 
                                @endforeach
                            @endforeach 
                        </td>
                        <td class="desc">{{ $tour->price }}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="/adm/tour/edit/{{ $tour->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href="/adm/tour/delete/{{ $tour->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                                <a href="/tour/{{ $tour->id }}" class="item" data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="zmdi zmdi-eye"></i>
                                </a>
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

<!-- Manage Destination modal -->
<div class="modal fade" id="destination" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Manage Destination</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="table-responsive table--no-card m-b-30">
                          <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Destination</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($destinations as $value)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $value->name }}</td>
                                  <td>
                                    <a class="btn default btn-xs red-stripe" href="/adm/destination/delete/{{ $value->id }}/delete">
                                      Delete</a>
                                  </td>
                                </tr>
                            @endforeach
                            </tbody>

                          </table>
                        </div>
                    </div>
                </div>

                {{-- <hr> --}}

                <h5>Create Destination</h5><br>
                <form class="form-horizontal" action="/adm/destination/store" method="POST">
                    @csrf
                    <fieldset>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Destination</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="name" name="name" placeholder="Destination Name" class="form-control">
                            </div>
                        </div>
                          
                        <!-- Form actions -->
                        <div class="row form-group">
                              <div class="col-md-12 text-right">
                                <input type="hidden" name="_method" value="POST">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                <button type="submit" class="btn btn-responsive btn-primary btn-sm">Create</button>
                              </div>
                          </div>
                      </fieldset>
                  </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- end Manage Destination modal -->

<!-- Manage Category modal -->
<div class="modal fade" id="category" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Manage Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="table-responsive table--no-card m-b-30">
                          <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Category</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($categorys as $value)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $value->name }}</td>
                                  <td>
                                    <a class="btn default btn-xs red-stripe" href="/adm/destination/delete/{{ $value->id }}/delete">
                                      Delete</a>
                                  </td>
                                </tr>
                            @endforeach
                            </tbody>

                          </table>
                        </div>
                    </div>
                </div>

                {{-- <hr> --}}

                <h5>Create Category</h5><br>
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
                          
                        <!-- Form actions -->
                        <div class="row form-group">
                              <div class="col-md-12 text-right">
                                <input type="hidden" name="_method" value="POST">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                <button type="submit" class="btn btn-responsive btn-primary btn-sm">Create</button>
                              </div>
                          </div>
                      </fieldset>
                  </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- end Manage Category modal -->
@endsection