@extends('layouts.admin')
{{-- Page title --}}
@section('title', 'Users')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-account-calendar"></i>user data
                    </h3>
                </div>
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary float-right2" data-toggle="modal" data-target="#CreateUser">
                        Create User
                    </button>
                </div>
            </div>
            
            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>Type</td>
                            <td>Action</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $value)
                        <tr>
                            <td>
                                {{ $loop->iteration }}                               
                            </td>
                            <td>
                                <div class="table-data__info">
                                    <h6>{{ $value->name }}</h6>
                                    <span>
                                        <a href="#">{{ $value->email }}</a>
                                    </span>
                                    <br>
                                    <span>
                                        <a href="#">{{ $value->phone }}</a>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <span class="role {{ $value->type }}">{{ $value->type }}</span>
                            </td>
                            
                            <td>
                                <div class="table-data-feature">
                                    <button class="item edit-user" data-toggle="modal" data-target="#EditUser" title="Edit" value="{{ $value->id }}">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <a haref="/adm/user/delete/{{ $value->id }}" class="item" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            
        </div>
        <!-- END USER DATA-->

    </div>

    
</div>
<!-- Add user modal -->
<div class="modal fade" id="CreateUser" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/adm/user/store" method="POST">
                    @csrf
                      <fieldset>
                          <!-- Name input-->
                          <div class="form-group">
                              <label class="col-md-2 control-label" for="name">Name</label>
                              <div class="col-md-10">
                                  <input name="name" type="text" placeholder="Name" value="" class="form-control"></div>
                          </div>
                          <!-- Email input-->
                          <div class="form-group">
                              <label class="col-md-2 control-label" for="email">E-mail</label>
                              <div class="col-md-10">
                                  <input name="email" type="text" placeholder="E-mail" value="" class="form-control"></div>
                          </div>
                          <!-- Phone input-->
                          <div class="form-group">
                              <label class="col-md-2 control-label" for="">Phone Number</label>
                              <div class="col-md-10">
                                  <input name="phone" type="text" placeholder="Phone Number" value="" class="form-control"></div>
                          </div>                      
                         
                          <!-- Password input-->
                          <div class="form-group">
                              <label class="col-md-2 control-label" for="password">Password</label>
                              <div class="col-md-10">
                                  <input name="password" type="password" placeholder="Password" value="" class="form-control"></div>
                          </div>

                          <!-- Form actions -->
                          <div class="form-group">
                              <div class="col-md-12 text-right">
                                <input type="hidden" name="_method" value="POST">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                <button type="submit" class="btn btn-responsive btn-primary btn-md">Submit</button>
                              </div>
                          </div>
                      </fieldset>
                  </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {{-- <button type="button" class="btn btn-primary">Confirm</button> --}}
            </div>
        </div>
    </div>
</div>
<!-- end Add user modal -->

<!-- Edit user modal -->
<div class="modal fade" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="" method="post">
                  <fieldset>
                      <!-- Name input-->
                      <div class="form-group">
                          <label class="col-md-2 control-label" for="name">Name</label>
                          <div class="col-md-10">
                              <input id="name" name="name" type="text" placeholder="Nama" value="" class="form-control"></div>
                      </div>
                      <!-- Email input-->
                      <div class="form-group">
                          <label class="col-md-2 control-label" for="email">E-mail</label>
                          <div class="col-md-10">
                              <input id="email" name="email" type="text" placeholder="E-mail" value="" class="form-control"></div>
                      </div>
                      <!-- Phone input-->
                      <div class="form-group">
                          <label class="col-md-2 control-label" for="email">Phone Number</label>
                          <div class="col-md-10">
                              <input id="phone" name="phone" type="text" placeholder="Phone Number" value="" class="form-control"></div>
                      </div>                      
                     
                      <!-- Password input-->
                      <div class="form-group">
                          <label class="col-md-2 control-label" for="password">Password</label>
                          <div class="col-md-10">
                              <input id="password" name="password" type="password" placeholder="Biarkan kosong jika tidak ingin mengganti password" value="" class="form-control"></div>
                      </div>

                      <!-- Form actions -->
                      <div class="form-group">
                          <div class="col-md-12 text-right">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-responsive btn-primary btn-md">Submit</button>
                          </div>
                      </div>
                  </fieldset>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {{-- <button type="button" class="btn btn-primary">Confirm</button> --}}
            </div>
        </div>
    </div>
</div>
<!-- end Edit user modal -->

@endsection

@section('script')
<script type="text/javascript">
  //Menampilkan Form  dan Data
  $(document).on('click','.edit-user',function(){
    var id = $(this).val();
    $.get('/adm/user/edit/'+ id , function (data) {
        console.log(data);
        var d = data.date;
        var dout = Date.parse(d);
        $('#name').attr("value", data.name);;
        $('#email').attr("value", data.email);;
        $('#phone').attr("value", data.phone);;
;
    })
  });
</script>
@endsection