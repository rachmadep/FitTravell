@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<!-- Header  Inner style-->
<section class="row final-inner-header" style="background: url({{ asset('img/slider/slide1.jpg') }});background-size: cover;background-position: center;">
    <div class="container">
        <h2 class="this-title">Checkout</h2>
    </div>
 </section>
 <section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="">Tour</li>
            <li class="">Booking</li>
            <li class="active">Checkout</li>
        </ol>
    </div>
 </section>
<!-- Header  Slider style-->

<!-- Booking style-->
  <section class="container clearfix common-pad-inner booknow">
    <div class="sec-header">
         <h2>Checkout</h2>
             <h3>Billing details</h3>
         </div> 
        
     <div class="row">
     
        <div class="col-lg-12 chackout-box">
            <div class="chackout-header">
                <h3>ORDER SUMMARY</h3>
                
            </div>
         <div class="chackout-table">
          <form action="/createinvoice/{{ $booking->id }}" method="POST">
            @csrf
             <table class="chackout-table1 table table-border">
                <thead>
                    <tr>
                        <th class="product-name">Items</th>
                        <th class="product-total">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="product-name">
                            {{ $booking->tour->implode('name') }}          
                        </td>
                        <td class="product-total">
                            Rp {{ $booking->tour->implode('price') }} 
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Order By          
                        </td>
                        <td class="product-total">
                            {{ $booking->user->implode('name') }} 
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Person          
                        </td>
                        <td class="product-total">
                            {{ $booking->tour->implode('person') }} Persons
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Duration          
                        </td>
                        <td class="product-total">
                            {{ $booking->tour->implode('duration') }}
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Departure          
                        </td>
                        <td class="product-total">
                            <input type="text" class="form-control datepicker-example8" name="departur" placeholder="Departure Date" required>
                        </td>
                    </tr>
                </tbody>

            </table>
            <input type="hidden" name="_method" value="POST">
            <button type="submit" class="res-btn" style="margin-bottom: 15px; float: right; margin-top: -10px;">
                Create Invoice
            </button>
          </form>
         </div>  
      
      </div>
    
    </section> 
    
<!-- Booking style-->

@endsection
