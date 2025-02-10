@extends('c_panel.layouts.app')
@section('title', 'Edit Banner')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Banner</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Manajemen Banner</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
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
                            <h4 class="card-title">Form Edit Banner</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                                            id="judul" name="judul" value="{{ old('judul', $banner->judul) }}">
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="sub_judul">Sub Judul</label>
                                        <input type="text" class="form-control @error('sub_judul') is-invalid @enderror" 
                                            id="sub_judul" name="sub_judul" value="{{ old('sub_judul', $banner->sub_judul) }}">
                                        @error('sub_judul')
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
                                        @if($banner->gambar)
                                            <div class="mt-2">
                                                <img src="{{ Storage::url($banner->gambar) }}" alt="Current Banner" width="200">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        <a href="{{ route('banner.index') }}" class="btn btn-secondary">Kembali</a>
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