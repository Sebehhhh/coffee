@extends('landingpage.layouts.app')
@section('title', 'Menu')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Menu Kami</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda</a></span> <span>Menu</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info section remains the same -->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 mb-5 pb-3">
                        <h3 class="mb-5 heading-pricing ftco-animate">{{ $category->kategori }}</h3>
                        @foreach($menus->where('category_id', $category->id) as $menu)
                            <div class="pricing-entry d-flex ftco-animate">
                                <div class="img" style="background-image: url({{ asset('storage/' . $menu->gambar) }});"></div>
                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3><span>{{ $menu->nama }}</span></h3>
                                        <span class="price">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="d-block">
                                        <p>{{ $menu->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
