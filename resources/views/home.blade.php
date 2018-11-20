@extends('layouts.app')

@section('content')
<!--Home Slider-->
<div id="minimal-bootstrap-carousel" class="carousel home2carousel slide carousel-fade shop-slider" data-ride="carousel">           
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(img/slider/slide1.jpg);backgroudn-position: center right;">
            
            <div class="carousel-caption nhs-caption nhs-caption1">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left">
                            <h2 data-animation="animated fadeInUp" class="this-title">Spend Your Dream Holidays</h2>
                            <p data-animation="animated fadeInDown">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quit.</p>
                            <a data-animation="animated fadeInRight" href="#" class="nhs-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="item  slide-2" style="background-image: url(img/slider/slide2.jpeg);backgroudn-position: center right;">
            
            <div class="carousel-caption nhs-caption nhs-caption2">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-center">
                            <h2 data-animation="animated fadeInUp" class="this-title">Spend Your Dream Holidays</h2>
                            <p data-animation="animated fadeInDown">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quit.</p>
                            <a data-animation="animated fadeInRight" href="#" class="nhs-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="item  slide-3" style="background-image: url(img/slider/slide3.jpg);backgroudn-position: center right;">
            
            <div class="carousel-caption nhs-caption nhs-caption3">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content text-left">                         
                            <h2  data-animation="animated fadeInUp" class="this-title">Make Your Memorable Holidays in a LakeResort</h2>
                            <p data-animation="animated fadeInDown">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quit.</p>
                            <a data-animation="animated fadeInRight" href="#" class="nhs-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
    {{-- Controls --}}
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>
</div>

 {{-- Search tour --}}
<div class="search-wrapper">
    <section class="container clearfix">
        <div class="search-sec">
            <div class="overlay">
                <div class="border">
                    <div class="ser-in-box">
                        <label for="form-control">Search</label>
                        <input class="form-control" placeholder="Tour Name, Destination" type="text">
                    </div>
                
                    <div class="ser-in-box">   
                        <label for="select-box">You like</label>
                        <div class="select-box">
                            <select class="select form-control" name="selectMenu">
                                <option value="default">Tour Category</option>  
                                <option value="1">1</option>    
                                <option value="2">2</option>    
                                <option value="3">3</option>    
                                <option value="4">4</option>    
                            </select>
                        </div>
                    </div>

                    <div class="ser-in-box">   
                        <label for="select-box">Where</label>
                        <div class="select-box">
                            <select class="select form-control" name="selectMenu">
                                <option value="default">Destination</option>  
                                <option value="1">1</option>    
                                <option value="2">2</option>    
                                <option value="3">3</option>    
                                <option value="4">4</option>    
                            </select>
                        </div>
                    </div>

                    <div class="ser-in-box">   
                        <label for="select-box">When</label>
                        <div class="select-box">
                            <select class="select form-control" name="selectMenu">
                                <option value="default">Month</option>  
                                <option value="1">1</option>    
                                <option value="2">2</option>    
                                <option value="3">3</option>    
                                <option value="4">4</option>    
                            </select>
                        </div>
                    </div>

                    <div class="ser-in-box chk-button">
                        <button type="submit" class="res-btn">Check Availability</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
 {{-- EndSearch tour  --}}


<!-- Discount--> 
<section class="container clearfix common-pad nasir-style">
    <div class="sec-header sec-header-pad">
        <h2><br>Tour Deals and Discount</h2>
        <h3>Pick a room that best suits your taste and budget</h3>
    </div>
    <div class="room-slider">
        <div class="roomsuite-slider-two">  
            <div class="room-suite room-suite-htwo">
                <div class="item">
                    <div class="ro-img"><img src="img/tour/honeymoon-lombok.jpg" class="img-responsive" alt=""></div>
                    <div class="ro-txt">
                        <h2>Honeymoon Lombok</h2>
                        <p>Paket honeymoon lombok 4 hari 3 malam, mulai dari 8jt/couple, paket sudah termasuk semua kebutuhan anda selama liburan di lombok</p>
                        <div class="ro-text-two">
                            <div class="left-p-two pull-left"><a href="/detail/" class="res-btn">details</a></div>
                            <div class="right-p-two pull-right"><p style="text-decoration: line-through;">Rp 8.500.000</p> <p>Rp 8.000.000</p></div>
                        </div>         
                    </div>
                </div>
            </div>
            
            <div class="room-suite room-suite-htwo">
                <div class="item">
                    <div class="ro-img"><img src="img/tour/festifal-baliem.jpg" class="img-responsive" alt=""></div>
                    <div class="ro-txt">
                        <h2>Festival Baliem</h2>
                        <p>Paket Tour Festival Lembah Baliem 6-10 Agustus 2019. Sudah termasuk tiket pesawat, hotel, makan, transport, perizinan, dan setting upacara adat.</p>
                        <div class="ro-text-two">
                            <div class="left-p-two pull-left"><a href="/detail/" class="res-btn">details</a></div>
                            <div class="right-p-two pull-right"><p style="text-decoration: line-through;">Rp 9.300.000</p> <p>Rp 9.000.000</p></div>
                        </div>         
                    </div>
                </div>
            </div>

            <div class="room-suite room-suite-htwo">
                <div class="item">
                    <div class="ro-img"><img src="img/tour/raja-ampat.jpg" class="img-responsive" alt=""></div>
                    <div class="ro-txt">
                        <h2>Raja Ampat</h2>
                        <p>Paket Tour Raja Ampat Papua 5 hari 4 malam. Kami menggunakan speedboat langsung dari sorong untuk tour raja ampat selama 4 hari 3 malam. booking sekarang juga.</p>
                        <div class="ro-text-two">
                            <div class="left-p-two pull-left"><a href="/detail/" class="res-btn">details</a></div>
                            <div class="right-p-two pull-right"><p style="text-decoration: line-through;">Rp 8.500.000</p> <p>Rp 7.500.000</p></div>
                        </div>         
                    </div>
                </div>
            </div>

            <div class="room-suite room-suite-htwo">
                <div class="item">
                    <div class="ro-img"><img src="img/tour/bunaken.jpg" class="img-responsive" alt=""></div>
                    <div class="ro-txt">
                        <h2>Bunaken</h2>
                        <p>paket tour bunaken 3 hari 2 malam ini bisa menjadi pilihan paket liburan anda lika hanya ada wake luang saat weekend.</p>
                        <div class="ro-text-two">
                            <div class="left-p-two pull-left"><a href="/detail/" class="res-btn">details</a></div>
                            <div class="right-p-two pull-right"><p style="text-decoration: line-through;">Rp 3.500.000</p> <p>Rp 3.000.000</p></div>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Popular Destination --}}
<section class="our-offer-htwo clearfix">    
    <div class="container clearfix common-pad">
        <div class="sec-header3">
            <h2>Popular Destination</h2>
            <h3>Jelajah Keanekaragaman Indonesia</h3>
        </div>
        <div class="row">
            <div class="col-md-4 our-offer-left">
                <a href="/destination">
                <div class="offer-img-box1">
                    <div class="spa-offer">
                        <div class="img_holder">
                            <img src="img/destination/bali.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <div class="room-ad-cont">
                                        <h2>Bali</h2>
                                        <h3>2 Tour</h3>
                                    </div>              
                                </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-8 offer-right">
                <div class="offer-img-box1">
                    <div class="spa-offer">
                        <div class="img_holder">
                            <img src="img/destination/lombok.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <div class="room-ad-cont">
                                        <h2>Lombok</h2>
                                        <h3>3 Tour</h3>
                                    </div>              
                                </div>
                        </div>
                    </div>
                </div>
              
                <div class="offer-img-box2">
                    <div class="box1">
                        <div class="img_holder">
                            <a href="/destination">
                                <img src="img/destination/flores.jpg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <div class="offertext1">
                                        <h2>Flores</h2>
                                        <h3>1 Tour</h3>
                                   </div>
                               </div>
                            </a>
                        </div>
                    </div>

                <a href="/destination"></a>
                    <div class="box1">
                        <div class="img_holder">
                            <a href="/destination">
                                <img src="img/destination/maluku.jpeg" class="img-responsive" alt="">
                                <div class="overlay">
                                    <div class="offertext1">
                                        <h2>Maluku</h2>
                                        <h3>2 Tour</h3>
                                   </div>
                                </div>
                           </a>
                        </div>
                    </div>
                <a href=""></a>
                </div>
            </div>
        </div>
    </div>
</section>   
{{-- End Popular Destination --}}

{{-- Most Popular Tours --}}
<section class="row nasir-room-grid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="sec-header3">
                    <h2>Most Popular Tours</h2>
                    <h3>Pick a tour that best suits your taste and budget</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 nroom-grid">
                <a href="/detail" class="room-img"><img src="img/tour/krakatau.jpg" alt=""></a>
                <div class="row this-conts">
                    <div class="media">
                        <div class="media-body this-title">Krakatau</div>
                        <div class="media-right">
                            <p>Rp 3.000.000</p>
                        </div>
                    </div>
                    <p>Paket Tour Anak Gunung Krakatau ini dimulai dari Jakarta dan selesai di Jakarta. Dengan fasilitas charter speed boat dari Pantai Carita untuk tour keliling Anak Gunung Krakatau.</p>
                    <a href="/detail" class="read-more">detail<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-4 nroom-grid">
                <a href="/detail" class="room-img"><img src="img/tour/mentawai.jpg" alt=""></a>
                <div class="row this-conts">
                    <div class="media">
                        <div class="media-body this-title">Mentawai</div>
                        <div class="media-right">
                            <p>Rp 3.000.000</p>
                        </div>
                    </div>
                    <p>Paket tour suku pedalaman mentawai di Sumatera. Semua kebutuhan tour sudah kami siapkan. Harga yang kami tawarkan sesuai dengan fasilitas yang anda dapatkan selama tour.</p>
                    <a href="/detail" class="read-more">detail<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-4 nroom-grid">
                <a href="/detail" class="room-img"><img src="img/tour/festival-pasola.jpg" alt=""></a>
                <div class="row this-conts">
                    <div class="media">
                        <div class="media-body this-title">Festival Pasola</div>
                        <div class="media-right">
                            <p>Rp 3.000.000</p>
                        </div>
                    </div>
                    <p>Paket Tour Festival Budaya Pasola Sumba 2019 akan diselenggarakan di Sumba pada bulan Februari dan Maret. Kami siapkan segala kebutuhan liburan selama 5 hari 4 malam di Sumba.</p>
                    <a href="/detail" class="read-more">detail<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- End Most Popular Tours --}}

@endsection
