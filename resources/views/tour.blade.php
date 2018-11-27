@extends('layouts.app')

{{-- @section('title', {{ $tour->name }}) --}}
@section('title')
{{ $tour->name }}
@endsection

@section('content')

 <!-- Header  Inner style-->
<section class="row final-inner-header" style="background: url(/img/tour/{{ $tour->image }});background-size: cover;background-position: center;">
    <div class="container">
        <h2 class="this-title">{{ $tour->name }}</h2>
    </div>
 </section>
 <section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="">Tour</li>
            <li class="active">{{ $tour->name }}</li>
        </ol>
    </div>
 </section>
<!-- Header  Slider style-->

<section class="container clearfix common-pad-inner">
<div class="row">      
    <div class="col-md-8">
        <div class="row detail-category">
            <div class="col-md-6">
                <div class="date-icon">
                    <i class="fa fa-clock-o"></i> <p>{{ $tour->duration }}</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="date-icon">
                    <i class="fa fa-tag"></i> 
                    <p>
                        @foreach( $tourcategory as $category)
                            @foreach( $category->categoryname as $name)
                                <a href="#">{{ $name->name }}</a>,
                            @endforeach
                        @endforeach
                    </p> 
                </div>
            </div>
        </div>
        
       
        <div class="single-room-wrapper">
         <!-- Rooms Slider style-->
            <div class="room-slider-wrapper">
                <div class="single-r-wrapper">
                    <div class="single-sl-room">
                        <div class="owl-itemm" data-hash="zero"><img src="/img/tour/{{ $tour->image }}" alt=""></div>
                        <div class="owl-itemm" data-hash="one"><img src="/img/tour/{{ $tour->image }}" alt=""></div>
                        <div class="owl-itemm" data-hash="two"><img src="/img/tour/{{ $tour->image }}" alt=""></div>
                        <div class="owl-itemm" data-hash="three"><img src="/img/tour/{{ $tour->image }}" alt=""></div>
                        <div class="owl-itemm" data-hash="four"><img src="/img/tour/{{ $tour->image }}" alt=""></div>
                    </div>  
                      <a class="button secondary url" href="#zero"><img src="/img/tour/{{ $tour->image }}" alt=""></a> 
                      <a class="button secondary url" href="#one"><img src="/img/tour/{{ $tour->image }}" alt=""></a> 
                      <a class="button secondary url" href="#two"><img src="/img/tour/{{ $tour->image }}" alt=""></a> 
                      <a class="button secondary url" href="#three"><img src="/img/tour/{{ $tour->image }}" alt=""></a> 
                      <a class="button secondary url" href="#four"><img src="/img/tour/{{ $tour->image }}" alt=""></a> 
               </div>
              
            </div>
           
          <!-- Rooms Slider style-->

            <div class="our-res">
                <div class="tab-title-box">
                    <ul class="clearfix" role="tablist">
                        <li class="active" data-tab-name="description">
                            <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        <li data-tab-name="facilities">
                            <a href="#facilities" aria-controls="facilities" role="tab" data-toggle="tab">Facilities</a>
                        </li>
                        <li data-tab-name="schedule">
                            <a href="#schedule" aria-controls="schedule" role="tab" data-toggle="tab">Schedule</a>
                        </li>
                        <li data-tab-name="bring">
                            <a href="#bring" aria-controls="bring" role="tab" data-toggle="tab">Things to Bring</a>
                        </li>
                        <li data-tab-name="term">
                            <a href="#term" aria-controls="term" role="tab" data-toggle="tab">Term & Conditions</a>
                        </li>
                        <li data-tab-name="price">
                            <a href="#price" aria-controls="price" role="tab" data-toggle="tab">Price</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content-box tab-content">
                    <div class="single-tab-content tab-pane fade in active row" id="description">
                        <div class="col-md-12">
                            <div class="content-box">
                                {!! $tour->description !!}
                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="facilities">
                        <div class="col-md-12">
                            <div class="content-box">
                                {!! $tour->facilities !!}
                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="schedule">
                        <div class="col-md-12">
                            <div class="content-box">
                                {!! $tour->schedule !!}
                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="bring">
                        <div class="col-md-12">
                            <div class="content-box">
                                {!! $tour->bring !!}
                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="term">
                        <div class="col-md-12">
                            <div class="content-box">
                                {!! $tour->term !!}
                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="price">
                        <div class="col-md-12">
                            <div class="content-box">
                                {!! $tour->price !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
           
        </div>
           
    </div>

       <div class="col-md-4">
       
          <div class="single-sidebar-widget sroom-sidebar">         
              
            <div class="room-overview">
                <div class="book-r-form">
                  <div class="room-price">
                    @if(is_null($tour->fakeprice))
                        <p class="rp">Rp {{ $tour->price }}</p>
                    @else
                        <p class="rp" style="text-decoration: line-through;">Rp {{ $tour->fakeprice }}</p> <br>
                        <p>Rp {{ $tour->price }}</p>
                    @endif
                  </div>
                  
                  <div class="book-form">
                    {{-- <div class="date-icon">
                        <i class="fa fa-clock-o"></i> <p>{{ $tour->person }} Person</p>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="date-icon">
                            <i class="fa fa-user">  <p>{{ $tour->person }} Person</p></i> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="date-icon">
                            <i class="fa fa-tag">  <p>{{ $tour->destination->implode('name') }}</p></i> 
                        </div>
                    </div>
                    @guest
                        {{-- <button type="button" class="res-btn" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">Please Login to Booking <i class="fa fa-arrow-right"></i></button> --}}
                        <a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse" class="collapsed res-btn">Please Login to Booking <i class="fa fa-arrow-right"></i></a>
                    @else
                        <a href="/booking/{{ $tour->id }}" class="res-btn">Booking Now <i class="icon icon-ShoppingCart"></i></a>
                    @endguest
                  </div>
              
              </div>
              
            </div>

          </div>

          <!-- Have any question style-->
            <div class="single-room-wrapper">
                <div class="question-wrapper">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>
                   
                   <div class="col-lg-6"><input type="text" class="form-control" id="name" name="name" placeholder="Name"></div>
                       {{-- <div class="col-lg-4"><input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"></div> --}}
                       <div class="col-lg-6"><input type="text" class="form-control" id="email" name="name" placeholder="Email"></div>
                   
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                        </div>
                  
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><button type="submit" class="res-btn">Submit Now <i class="fa fa-arrow-right"></i></button></div>
                </div>
            </div>
           <!-- Have any question style-->
       </div>
      
</div>
</section> 

@endsection
