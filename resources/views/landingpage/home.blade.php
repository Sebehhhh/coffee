@extends('landingpage.layouts.app')
@section('title', 'Home')

@section('content')
    <section class="home-slider owl-carousel">
        @foreach ($banners as $banner)
            <div class="slider-item" style="background-image: url({{ Storage::url($banner->gambar) }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-8 col-sm-12 text-center ftco-animate">
                            <span class="subheading">Selamat Datang</span>
                            <h1 class="mb-4">{{ $banner->judul }}</h1>
                            <p class="mb-4 mb-md-5">{{ $banner->sub_judul }}</p>
                            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#"
                                    class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View
                                    Menu</a></p>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
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

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Temukan</span>
                        <h2 class="mb-4">Menu Kami</h2>
                        <p class="mb-4">Lebih dari sekedar kopi, kami menyajikan berbagai pilihan menu untuk memenuhi 
                            selera Anda. Dari kopi premium hingga makanan ringan, menu utama, dan hidangan penutup yang menggoda.
                            Setiap hidangan dibuat dengan bahan berkualitas dan racikan khusus dari chef kami.
                            Nikmati suasana nyaman sambil menikmati hidangan favorit Anda di KawaNgopi.
                        </p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Lihat Menu Lengkap</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach ($samples as $menu)
                            <div class="col-md-6 {{ $loop->index % 2 != 0 ? 'mt-lg-4' : '' }}">
                                <div class="menu-entry">
                                    <a href="#" class="img"
                                        style="background-image: url({{ Storage::url($menu->gambar) }});"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Best Sellers</h2>
                    <p>Berikut adalah pilihan menu terbaik kami dari berbagai kategori, mulai dari kopi, makanan, minuman segar hingga dessert yang paling digemari oleh pelanggan kami.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($best_sellers as $menu)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="#" class="img"
                                style="background-image: url({{ Storage::url($menu->gambar) }});"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="#">{{ $menu->nama }}</a></h3>
                                <p>{{ $menu->deskripsi }}</p>
                                <p class="price"><span>Rp {{ number_format($menu->harga, 0, ',', '.') }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent from blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
