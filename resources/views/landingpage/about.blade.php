@extends('landingpage.layouts.app')
@section('title', 'Info Kawanan')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">About Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info w-100">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-coffee"></span></div>
                            <div class="text">
                                <h3>Kopi Segar</h3>
                                <p>Rasakan aroma dan rasa kaya dari kopi segar kami, dibuat dari biji terbaik.</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>Indonesia</h3>
                                <p>Jl.KH.Akhmad Nawawi No.38, RT.01/RW.01, Karang Taruna, Kec. Pelaihari, Kabupaten Tanah
                                    Laut, Kalimantan Selatan 70812</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Sabtu-Kamis</h3>
                                <p>9:00am - 11:00pm</p>
                                <h3>Jumat</h3>
                                <p>4:00pm - 11:00pm</p>
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
                                    <h3>Pemesanan Mudah dan Cepat</h3>
                                    <p>Proses pemesanan yang mudah dan cepat untuk kenyamanan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>Snack dan Makanan Lain</h3>
                                    <p>Kami juga menyediakan berbagai snack dan makanan lain selain kopi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-entry">
                                <div class="text text-center pt-3">
                                    <h3>Tempat Luas dan Nyaman</h3>
                                    <p>Nikmati suasana yang luas dan nyaman di kedai kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
@endsection
