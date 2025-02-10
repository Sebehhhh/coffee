@extends('landingpage.layouts.app')
@section('title', 'Home')

@section('content')
    <section class="home-slider owl-carousel">
        @foreach ($banners as $banner)
            <div class="slider-item" style="background-image: url({{ Storage::url($banner->gambar) }});">
                <div class="overlay" style="background: rgba(0, 0, 0, 1);"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-8 col-sm-12 text-center ftco-animate">
                            <span class="subheading text-light">Selamat Datang</span>
                            <h1 class="mb-4">{{ $banner->judul }}</h1>
                            <p class="mb-4 mb-md-5">{{ $banner->sub_judul }}</p>
                            <p><a href="{{ url('p_menu') }}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">
                                    Menu</a></p>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
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


    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Temukan</span>
                        <h2 class="mb-4">Menu Kami</h2>
                        <p class="mb-4">Lebih dari sekedar kopi, kami menyajikan berbagai pilihan menu untuk memenuhi
                            selera Anda. Dari kopi premium hingga makanan ringan, menu utama, dan hidangan penutup yang
                            menggoda.
                            Setiap hidangan dibuat dengan bahan berkualitas dan racikan khusus dari chef kami.
                            Nikmati suasana nyaman sambil menikmati hidangan favorit Anda di KawaNgopi.
                        </p>
                        <p><a href="{{ url('p_menu') }}" class="btn btn-primary btn-outline-primary px-4 py-3">Lihat Menu
                                Lengkap</a>
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
                    <p>Berikut adalah pilihan menu terbaik kami dari berbagai kategori, mulai dari kopi, makanan, minuman
                        segar hingga dessert yang paling digemari oleh pelanggan kami.</p>
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
                @foreach ($galleries as $gallery)
                    <div class="col-md-3 ftco-animate">
                        <a href="{{ url('p_gallery') }}" class="gallery img d-flex align-items-center"
                            style="background-image: url({{ Storage::url($gallery->gambar) }});">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Blog Terbaru</h2>
                    <p>Temukan berbagai artikel menarik tentang kopi, kuliner, dan gaya hidup yang kami hadirkan khusus
                        untuk Anda dalam blog terbaru kami.</p>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ url('p_blog_page', $blog->id) }}" class="block-20"
                                style="background-image: url('{{ asset('storage/' . $blog->gambar) }}');">
                            </a>
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a href="#">{{ $blog->created_at->format('d-m-Y') }}</a></div>
                                    <div><a href="#">{{ $blog->user->name }}</a></div>
                                </div>
                                <h3 class="heading mt-2"><a href="#">{{ $blog->judul }}</a></h3>
                                <p>{{ Str::limit($blog->deskripsi, 50) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
