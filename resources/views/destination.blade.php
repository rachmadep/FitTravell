@extends('layouts.app')

@section('title', 'Bali')

@section('content')

 <!-- Header  Inner style-->
<section class="row final-inner-header" style="background: url({{ asset('img/destination/bali1.jpg') }});background-size: cover;">
    <div class="container">
        <h2 class="this-title">Bali</h2>
    </div>
 </section>
 <section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="">Destination</li>
            <li class="active">Bali</li>
        </ol>
    </div>
 </section>
<!-- Header  Slider style-->

<section class="row nasir-room-grid">
    <div class="container">
        
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

 <div class="separator"></div>

@endsection
