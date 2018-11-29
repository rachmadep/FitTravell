@extends('layouts.app')

@section('title', 'Invoice')

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
            <li class="">Tour</li>
            <li class="">Booking</li>
            <li class="active">Chackout</li>
        </ol>
    </div>
 </section>
<!-- Header  Slider style-->


{{--  --}}
<section class="container clearfix common-pad-inner booknow">
<div id="printableArea">
  <div class="row">
    <div class="col-md-4">
      <div class="head-text-type1">
        <div class="sec-header">
         <h2>Invoice</h2>
             {{-- <h3>Invoice Number : 13232</h3> --}}
             <p>Invoice Number : {{ 11235+$booking->id }}</p>
             <p>Date : {{ $booking->date }}</p>
        </div> 
        
          {{-- <h1>Invoice</h1>
          <p>Invoice Number : 13232</p>
          <p>Tanggal : 15/12/2018</p> --}}
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <h3>Invoiced To :</h3>
        <p>Name : {{ $booking->user->implode('name') }}</p>
        <p>Phone Number : {{ $booking->user->implode('phone') }}</p>
        <p>E-mail : {{ $booking->user->implode('email') }}</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="">
        <h3>Status : Not yet paid</h3>
        <p>Payment deadline : {{ $booking->departur }}</p>
        <p>Bank : Bank Mandiri</p>
        <p>Account number : 88812138014824</p>
        <p>On behalf of the : Saya Yaa He Be De</p>
        <p>Reference number : 3211{{ $booking->id }}</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
      <div class="boxed">
        <div class="row">
          <h3>PURCHASE DETAILS</h3>
        </div>
      </div>
      <div class="boxed">
          <div class="shopping-cart">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                      <span class="col-name">Item</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                      <span class="col-name text-left">Detail</span>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                      <span class="col-name">Price</span>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">Tour</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">PAKET {{ $booking->tour->implode('name') }}</span>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">Rp {{ $booking->tour->implode('price') }}</span>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">Person</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">{{ $booking->tour->implode('person') }} Persons</span>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name"></span>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">Duration</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">{{ $booking->tour->implode('duration') }}</span>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name"></span>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">Departure</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name">{{ $booking->departur }}</span>
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <span class="col-name"></span>
                  </div>
              </div>


              
        

              {{-- <div class="row btns-row">
              </div> --}}
              <div class="row">


                  <div class="col-md-4 col-sm-4 invoice-summary" id="printableArea">
                      <div class="curtain">
                          <div class="row">
                              <div class="col-lg-5 col-md-5 col-sm-4 col-sm-offset-1 col-md-offset-0 col-xs-5">
                                  <span class="h3">Total</span>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-7 col-xs-6">
                                  <span class="h3">Rp {{ $booking->tour->implode('price') }}</span>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="javascript:printDiv('printableArea');" class="btn btn-primary active">Cetak Invoice</a>
                    
                </div>
              </div>

          </div>
      </div>
  </div>
</div>
</section>
{{--  --}}

@endsection

@section('script')
<script language="javascript" type="text/javascript">
   function printDiv(divID) {
       //Get the HTML of div
       var divElements = document.getElementById(divID).innerHTML;
       //Get the HTML of whole page
       var oldPage = document.body.innerHTML;

       //Reset the page's HTML with div's HTML only
       document.body.innerHTML =
         "<html><head><title></title></head><body>" +
         divElements + "</body>";

       //Print Page
       window.print();

       //Restore orignal HTML
       document.body.innerHTML = oldPage;
   }
</script>  
@endsection