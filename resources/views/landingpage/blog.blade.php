@extends('landingpage.layouts.app')
@section('title', 'Info Kawanan')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Blog</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda</a></span>
                            <span>Blog</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
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
            @if ($blogs->hasPages())
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            {{-- Previous Page Link --}}
                            @if ($blogs->onFirstPage())
                                <li class="disabled"><span>&lt;</span></li>
                            @else
                                <li><a href="{{ $blogs->previousPageUrl() }}">&lt;</a></li>
                            @endif
        
                            {{-- Pagination Elements --}}
                            @foreach ($blogs->links()->elements as $element)
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $blogs->currentPage())
                                            <li class="active"><span>{{ $page }}</span></li>
                                        @else
                                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
        
                            {{-- Next Page Link --}}
                            @if ($blogs->hasMorePages())
                                <li><a href="{{ $blogs->nextPageUrl() }}">&gt;</a></li>
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
@endsection
