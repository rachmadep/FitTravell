@extends('layouts.app')

@section('title', 'My Order')

@section('style')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
@endsection

@section('content')

<!-- Header  Inner style-->
<section class="row final-inner-header" style="background: url({{ asset('img/slider/slide1.jpg') }});background-size: cover;background-position: center;">
    <div class="container">
        <h2 class="this-title">Chackout</h2>
    </div>
 </section>
 <section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="">Account</li>
            <li class="active">My Order</li>
        </ol>
    </div>
 </section>
<!-- Header  Slider style-->

<!-- Booking style-->
<section class="container clearfix common-pad-inner booknow">
    <div class="sec-header">
         <h2>My Order</h2>
             <h3>Order History</h3>
    </div> 
        
    <div class="container-fluid">
      <div class="boxed">
          <div class="shopping-cart">
              <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                      <span class="col-name">Date</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name text-left">Item</span>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name text-left">Price</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name">Action</span>
                  </div>
              </div>
              
              @foreach( $booking as $value )
              <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                      <span class="col-name">{{ $value->date }}</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <span class="col-name">PAKET {{ $value->tour->implode('name') }}</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <span class="col-name">Rp {{ $value->tour->implode('price') }}</span>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <span class="col-name">
                        
                          <a href="/invoice/{{ $value->id }}" class="btn btn-primary active">View Invoice</a>
                          {{-- <a href="" class="btn btn-primary active">Upload proof of Payment</a> --}}
                        <button type="button" class="btn btn-primary active" data-toggle="modal" data-target="#exampleModal{{ $value->id }}">
                            Upload proof of Payment
                        </button>
                      </span>
                  </div>
              </div>
              @endforeach
           
          </div>
          <hr>
      </div>
    </div>
     
        
    
</section> 
<!-- Modal -->
@foreach( $booking as $value)
<div class="modal fade" id="exampleModal{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload proof of Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/order/upload/{{ $value->id }}" method="POST" enctype="multipart/form-data">
                    @csrf

            <div class="form-group">
                <label for="exampleFormControlFile1">Proof of Payment (Image)</label>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                    <div>
                        <span class="btn btn-primary btn-embossed btn-file">
                        <span class="fileinput-new"><i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Select image</span>
                        <span class="fileinput-exists"><i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Change</span>
                        <input type="hidden"><input type="file" name="image" value=""></span>
                        </span>
                        <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><i class="fa fa-ban"></i>&nbsp;&nbsp;Remove</a>
                    </div>
                </div>
            </div>
            <input type="hidden" name="_method" value="POST">
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- Booking style-->

@endsection

@section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endsection