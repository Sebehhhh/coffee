@extends('c_panel.layouts.app')
@section('title', 'Edit Blog')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Blog</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Manajemen Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Edit Blog</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                                            id="judul" name="judul" value="{{ old('judul', $blog->judul) }}">
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                            id="deskripsi" name="deskripsi" rows="5">{{ old('deskripsi', $blog->deskripsi) }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" 
                                            id="gambar" name="gambar">
                                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                                        @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        @if($blog->gambar)
                                            <div class="mt-2">
                                                <img src="{{ Storage::url($blog->gambar) }}" alt="Current Blog Image" width="200">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        <a href="{{ route('blog.index') }}" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection