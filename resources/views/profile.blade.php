@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<!-- Header  Inner style-->
<section class="row final-inner-header" style="background: url({{ asset('img/slider/slide1.jpg') }});background-size: cover;background-position: center;">
    <div class="container">
        <h2 class="this-title">Profile</h2>
    </div>
 </section>
 <section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="">Account</li>
            <li class="active">Profile</li>
        </ol>
    </div>
 </section>
<!-- Header  Slider style-->

<!-- Booking style-->
<section class="container clearfix common-pad-inner booknow">
    <div class="sec-header">
         <h2>My Account</h2>
             <h3>Profile</h3>
    </div> 
        
    <div class="container-fluid">
      <div class="boxed">
          <div class="shopping-cart">
              <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                      <span class="col-name">Name</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                      <span class="col-name text-left">E-mail</span>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name text-left">Phone Number</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name">Action</span>
                  </div>
              </div>

              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <span class="col-name">{{ $user->name }}</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                    <span class="col-name">{{ $user->email }}</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <span class="col-name">{{ $user->phone }}</span>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <span class="col-name" style="float: right;">                      
                      <button type="button" class="btn btn-primary active" data-toggle="modal" data-target="#exampleModal">
                          Edit
                      </button>
                    </span>
                </div>
              </div>
            
          </div>
          <hr>
      </div>
    </div>
     
        
    
</section> 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/profile/{{$user->id}}/update" class="clearfix">
                @csrf
                <label for="">Name</label>
                <input class="form-control" name="name" type="text" value="{{ $user->name }}" />
                <label for="">Email</label>
                <input class="form-control" name="email" type="text" value="{{ $user->email }}" />
                 <label for="">Phone</label>
                <input class="form-control" name="phone" type="text" value="{{ $user->phone }}" />
                <label for="">Password</label>
                <input class="form-control" name="password" type="Password" placeholder="Password" />
                <p class="note">Empty if you don't want to change !</p>
                
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="res-btn">Update</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
    
<!-- Booking style-->

@endsection
