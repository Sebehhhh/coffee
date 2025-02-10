@extends('c_panel.layouts.app')
@section('title', 'Tambah Menu')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Menu</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Manajemen Menu</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Tambah Menu</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama Menu</label>
                                                <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" 
                                                    name="nama" value="{{ old('nama') }}" placeholder="Nama Menu">
                                                @error('nama')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <input type="number" id="harga" class="form-control @error('harga') is-invalid @enderror" 
                                                    name="harga" value="{{ old('harga') }}" placeholder="Harga Menu">
                                                @error('harga')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="category_id">Kategori</label>
                                                <select class="form-select @error('category_id') is-invalid @enderror" 
                                                    id="category_id" name="category_id">
                                                    <option value="">Pilih Kategori</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                            {{ $category->kategori }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="gambar">Gambar Menu</label>
                                                <input type="file" id="gambar" class="form-control @error('gambar') is-invalid @enderror" 
                                                    name="gambar">
                                                @error('gambar')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="best_seller">Best Seller</label>
                                                <select class="form-select @error('best_seller') is-invalid @enderror" 
                                                    id="best_seller" name="best_seller">
                                                    <option value="0" {{ old('best_seller') == '0' ? 'selected' : '' }}>Tidak</option>
                                                    <option value="1" {{ old('best_seller') == '1' ? 'selected' : '' }}>Ya</option>
                                                </select>
                                                @error('best_seller')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="sampel">Sampel</label>
                                                <select class="form-select @error('sampel') is-invalid @enderror" 
                                                    id="sampel" name="sampel">
                                                    <option value="0" {{ old('sampel') == '0' ? 'selected' : '' }}>Tidak</option>
                                                    <option value="1" {{ old('sampel') == '1' ? 'selected' : '' }}>Ya</option>
                                                </select>
                                                @error('sampel')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                                    id="deskripsi" name="deskripsi" rows="3" 
                                                    placeholder="Deskripsi Menu">{{ old('deskripsi') }}</textarea>
                                                @error('deskripsi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>
@endsection
