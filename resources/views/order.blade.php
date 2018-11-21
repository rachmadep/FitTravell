@extends('layouts.app')

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
                  <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
                      <span class="col-name">Date</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                      <span class="col-name text-left">Item</span>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name text-left">Price</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                      <span class="col-name">Action</span>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                      <span class="col-name">15/12/2018</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                      <span class="col-name">PAKET HONEYMOON LOMBOK</span>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <span class="col-name">Rp 8.000.000</span>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <span class="col-name">
                        
                          <a href="/invoice" class="btn btn-primary active">View Invoice</a>
                          {{-- <a href="" class="btn btn-primary active">Upload proof of Payment</a> --}}
                        <button type="button" class="btn btn-primary active" data-toggle="modal" data-target="#exampleModal">
                            Upload proof of Payment
                        </button>
                      </span>
                  </div>
              </div>
              


              
        

              {{-- <div class="row btns-row">
              </div> --}}
              
              
            
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
        <h5 class="modal-title" id="exampleModalLabel">Upload proof of Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Proof of Payment (Image)</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
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
    
<!-- Booking style-->

@endsection
