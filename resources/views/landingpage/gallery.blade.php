@extends('landingpage.layouts.app')
@section('title', 'Gallery')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Gallery</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda</a></span>
                            <span>Gallery</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-gallery py-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4 col-lg-3 mb-4 ftco-animate">
                        <div class="gallery-item">
                            <a href="{{ Storage::url($gallery->gambar) }}" class="gallery-lightbox">
                                <div class="gallery-img" style="background-image: url({{ Storage::url($gallery->gambar) }});
                                    height: 250px; 
                                    background-size: cover;
                                    background-position: center;
                                    border-radius: 8px;
                                    position: relative;
                                    overflow: hidden;">
                                    <div class="overlay-gallery">
                                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                            <span class="icon-search"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($galleries->hasPages())
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            {{-- Previous Page Link --}}
                            @if ($galleries->onFirstPage())
                                <li class="disabled"><span>&lt;</span></li>
                            @else
                                <li><a href="{{ $galleries->previousPageUrl() }}">&lt;</a></li>
                            @endif
        
                            {{-- Pagination Elements --}}
                            @foreach ($galleries->links()->elements as $element)
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $galleries->currentPage())
                                            <li class="active"><span>{{ $page }}</span></li>
                                        @else
                                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
        
                            {{-- Next Page Link --}}
                            @if ($galleries->hasMorePages())
                                <li><a href="{{ $galleries->nextPageUrl() }}">&gt;</a></li>
                            @else
                                <li class="disabled"><span>&gt;</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </section>

    @push('styles')
    <style>
        .gallery-item {
            transition: all 0.3s ease;
        }
        .gallery-item:hover {
            transform: scale(1.02);
        }
        .overlay-gallery {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-item:hover .overlay-gallery {
            opacity: 1;
        }
        .icon-search {
            color: white;
            font-size: 24px;
        }
    </style>
    @endpush
@endsection
