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
            <li class="">Tour</li>
            <li class="">Booking</li>
            <li class="active">Chackout</li>
        </ol>
    </div>
 </section>
<!-- Header  Slider style-->

<!-- Booking style-->
  <section class="container clearfix common-pad-inner booknow">
    <div class="sec-header">
         <h2>Chackout</h2>
             <h3>Billing details</h3>
         </div> 
        
     <div class="row">
     
        <div class="col-lg-12 chackout-box">
            <div class="chackout-header">
                <h3>ORDER SUMMARY</h3>
                
            </div>
         <div class="chackout-table">
          <form action="/invoice">
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
                            HONEYMOON LOMBOK          
                        </td>
                        <td class="product-total">
                            Rp 8.000.000
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Order By          
                        </td>
                        <td class="product-total">
                            Sofyan Aji
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Person          
                        </td>
                        <td class="product-total">
                            2 Persons
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Duration          
                        </td>
                        <td class="product-total">
                            4 Day 3 Night
                        </td>
                    </tr>
                    <tr class="cart_item">
                        <td class="product-name">
                            Departure          
                        </td>
                        <td class="product-total">
                            <input type="text" class="form-control datepicker-example8" placeholder="Departure Date" required>
                        </td>
                    </tr>
                </tbody>

            </table>
            <button type="submit" class="res-btn" style="margin-bottom: 15px; float: right; margin-top: -10px;">
                Create Invoice
            </button>
          </form>
         </div>  
      
      </div>
    
    </section> 
    
<!-- Booking style-->

@endsection
