@extends('landingpage.layouts.app')
@section('title', 'Info Kawanan')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">About Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Beranda</a></span> <span>About</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
   
    <section class="ftco-intro text-center">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end justify-content-center">
                <div class="info w-100">
                    <div class="row no-gutters mb-4">
                        <div class="col-md-4 d-flex ftco-animate justify-content-center">

                            <div class="text">
                                <h3>Setiap Hari</h3>
                                <p>10:00 - 22:00 WITA</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate justify-content-center">

                            <div class="text">
                                <h3>Alamat</h3>
                                <p>Jl.KH.Akhmad Nawawi No.38, RT.01/RW.01, Karang Taruna, Kec. Pelaihari, Kabupaten Tanah
                                    Laut, Kalimantan Selatan 70812</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate justify-content-center">

                            <div class="text">
                                <h3>Jum'at</h3>
                                <p>16:00 - 22:00 WITA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ Storage::url($story->gambar) }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Temukan</span>
                    <h2 class="mb-4">Cerita Kami</h2>
                </div>
                <div>
                    <p>{{ $story->cerita }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="heading-section text-center ftco-animate">
                        <span class="subheading">Nikmati</span>
                        <h2 class="mb-4">Layanan Kami</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>Reservasi Meja</h3>
                                    <p>Pastikan tempat terbaik untukmu dan teman-teman dengan reservasi mudah. Pilih indoor dengan AC atau outdoor dengan udara segar sesuai kenyamananmu!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>WiFi Gratis</h3>
                                    <p>Internet cepat dan stabil untuk menemani waktumu di kafe. Cocok untuk kerja, belajar, atau sekadar menikmati konten favorit tanpa hambatan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>Charging Station</h3>
                                    <p>Gadget lowbat? Jangan khawatir! Nikmati charging station gratis agar baterai tetap penuh sepanjang hari.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>Birthday Package</h3>
                                    <p>Buat momen ulang tahun lebih berkesan dengan dekorasi, menu spesial, dan suasana cozy. Indoor atau outdoor? Semua bisa!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>Cashless Payment</h3>
                                    <p>Kami mendukung pembayaran digital untuk pengalaman yang lebih cepat dan aman. Terima GoPay, OVO, ShopeePay, serta kartu debit/kredit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>Indoor & Outdoor Area</h3>
                                    <p>Pilih suasana sesuai mood-mu! Indoor dengan AC untuk kenyamanan maksimal atau outdoor dengan udara segar untuk suasana lebih santai.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
@endsection
