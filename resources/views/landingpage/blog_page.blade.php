@extends('landingpage.layouts.app')
@section('title', 'Detail Blog')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Blog Details</h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ url('/') }}">Beranda</a></span>
                            <span class="mr-2"><a href="{{ url('p_blog') }}">Blog</a></span>
                            <span>{{ $blog->title }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <p class="text-center">
                        <img src="{{ asset('storage/' . $blog->gambar) }}" alt="{{ $blog->judul }}" class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{ $blog->judul }}</h2>
                    <div class="meta-info mb-3">
                        <span class="author">By {{ $blog->user->name }}</span>
                        <span class="date ml-3">{{ $blog->created_at->format('d M Y') }}</span>
                    </div>
                    <p>{{ $blog->deskripsi }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
