@extends('layouts.app')

@section('content')

 <!-- Header  Inner style-->
<section class="row final-inner-header" style="background: url({{ asset('img/tour/honeymoon-lombok.jpg') }});background-size: cover;background-position: center;">
    <div class="container">
        <h2 class="this-title">Honeymoon Lombok</h2>
    </div>
 </section>
 <section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="">Tour</li>
            <li class="active">Honeymoon Lombok</li>
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
                    <i class="fa fa-clock-o"></i> <p>4 Day 3 Night</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="date-icon">
                    <i class="fa fa-tag"></i> <p>Category : <a href="">Honeymoon Trip</a>, <a href="">Private Trip</a></p> 
                </div>
            </div>
        </div>
        
       
        <div class="single-room-wrapper">
         <!-- Rooms Slider style-->
            <div class="room-slider-wrapper">
                <div class="single-r-wrapper">
                    <div class="single-sl-room">
                        <div class="owl-itemm" data-hash="zero"><img src="/img/gallery/honeymoon-lombok (1).jpg" alt=""></div>
                        <div class="owl-itemm" data-hash="one"><img src="/img/gallery/honeymoon-lombok (2).jpg" alt=""></div>
                        <div class="owl-itemm" data-hash="two"><img src="/img/gallery/honeymoon-lombok (3).jpg" alt=""></div>
                        <div class="owl-itemm" data-hash="three"><img src="/img/gallery/honeymoon-lombok (4).jpg" alt=""></div>
                    </div>  
             
                      <a class="button secondary url" href="#zero"><img src="/img/gallery/honeymoon-lombok (1).jpg" alt=""></a> 
                      <a class="button secondary url" href="#one"><img src="/img/gallery/honeymoon-lombok (2).jpg" alt=""></a> 
                      <a class="button secondary url" href="#two"><img src="/img/gallery/honeymoon-lombok (3).jpg" alt=""></a> 
                      <a class="button secondary url" href="#three"><img src="/img/gallery/honeymoon-lombok (4).jpg" alt=""></a> 
                  
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
                                <h3>PAKET HONEYMOON LOMBOK</h3>
                                <p>Lombok merupakan pulau yang cantik untuk menjadi destinasi liburan, pulau yang belum begitu ramai penduduk, anti kemacetan lalu lintas dan terdapat banyak fasilitas untuk kenyamanan liburan seperti hotel mewah, transport nyaman dan destinasi wisata yang bervariasi. Pulau ini juga sangat cocok untuk destinasi honeymoon anda, karena banyak pulau pulau kecil atau biasa disebut Gili oleh penduduk lokal yang masih sepi dan alami.</p>

                                <p>Paket Honeymoon Lombok 4 hari 3 malam bisa menjadi pilihan anda untuk menikmati keindahan lombok bersama pasangan anda. Paket ini spesial kami buat untuk honeymoon anda selama di lombok senyaman mungkin.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="single-tab-content tab-pane fade row" id="facilities">

                        <div class="col-md-12">
                            <div class="content-box">

                                <h3>Included</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>
                                            <li>Transport Private AC</li><li>Air mineral selama tour</li><li>Private speed boat</li><li>Hotel sesuai pilihan selama 3 malam</li><li>Makan selama program + 2x Candle light dinner</li><li>Guide ramah dan komunikatif</li><li>Semua tiket wisata dalam program</li>
                                        </ul>
                                    </div>
                                    
                                </div>

                                <h3>Excluded</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>
                                            <li>Transportasi ke/dari Lombok</li><li>Tip untuk driver/guide</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-tab-content tab-pane fade row" id="schedule">

                        <div class="col-md-12">
                            <div class="content-box">
                                
                                <div class="item_content"><h2><strong>DAY 1</strong></h2><p>15.00 Pada jam kedatangan, kami akan menjemput anda di Bandara/Pelabuhan Lombok<br> 16.00 Kemudian kami antar ke hotel sesuai pilihan dalam paket<br> 17.00 Bebas santai di Hotel<br> 19.00 Dinner di restoran lokal senggigi</p></div>

                                <div class="item_content"><h2><strong>DAY 2 </strong></h2><p>09.00 Tour ke Gili Air dengan private boat (snorkeling pada spot ikan)<br> 11.00 Dan bisa snorkeling di Gili Meno dengan spot karang dan turtle<br> 12.00 Makan siang dan santai di Gili Trawangan<br> 15.00 Kembali ke Ke Pelabuhan Mentigi dan transfer ke Hotel<br> 19.00 Candle light dinner di restoran tepi pantai Senggigi</p></div>

                                <div class="item_content"><h2><strong>DAY 3 </strong></h2><p>08.00 Setelah sarapan, perjalanan menuju Senaru<br> 10.00 Tour ke Air Terjun Sendanggile dan Tiu Kelep<br> 12.00 Kembali ke mobil, makan siang di restoran senaru<br> 17.00 Tour sunset point di Bukit Malimbu</p></div>

                                <div class="item_content"><h2></h2><h2><strong>DAY 4 </strong></h2><p>08.00 Setelah sarapan, tour ke lombok bagian selatan<br> 10.00 Tour kampung sasak (desa sade)<br> 12.00 Makan siang dan santai di Pantai Kuta Lombok<br> 14.00 Drop ke bandara dan tour selesai di bandara Lombok</p></div>

                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="bring">
                        <div class="col-md-12">
                            <div class="content-box">
                                <h3>Things to Bring</h3>
                                <ol><li>Kamera</li><li>Kacamata Hitam</li><li>Uang kecil</li><li>Topi / payung</li><li>Powerbank</li><li>Cemilan pribadi (penting)</li><li>Obat pribadi</li></ol>
                                
                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="term">
                        <div class="col-md-12">
                            <div class="content-box">
                                <h3>Term & Conditions</h3>
                                <ul><li>Anda boleh merubah itinerary sesuai keinginan, silahkan langsung menghubungi admin ( 082243426006 )</li><li>Membayar DP sebesar 50% dari harga trip dan melunasi pembayaran paling lambat 7 hari sebelum tanggal keberangkatan.</li><li>Pembayaran bisa melalui Transfer ke Rek <b>Bank Mandiri 0373594838 A.N. Bayu Adin H</b> dan konfirmasi pembayaran dengan mengirimkan foto bukti transfer melalui email atau whatsapp dengan melampirkan waktu dan tanggal transfer serta nama rekening bank yang transfer</li><li>Harga Trip sewaktu-waktu dapat berubah menyesuaikan kenaikan harga bbm atau yang lainnya yang berhubungan dengan trip tanpa adanya pemberitahuan terlebih dahulu</li></ul>
                                
                            </div>
                        </div>
                    </div>

                    <div class="single-tab-content tab-pane fade row" id="price">
                        <div class="col-md-12">
                            <div class="content-box">
                                <h3>Rp 8.000.000</h3>
                                <h4>1 Couple (2 Persons)</h4>
                                
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
              @guest
              <a href="" class="res-btn">Please Login to Booking <i class="fa fa-arrow-right"></i></a>
              @else
              <a href="" class="res-btn">Booking Now <i class="icon icon-ShoppingCart"></i></a>
              @endguest
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
