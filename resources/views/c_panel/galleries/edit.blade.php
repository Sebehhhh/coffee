@extends('c_panel.layouts.app')
@section('title', 'Edit Galeri')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Galeri</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Manajemen Galeri</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Galeri</li>
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
                            <h4 class="card-title">Form Edit Galeri</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" id="gambar" class="form-control" name="gambar">
                                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                                                @error('gambar')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mt-3">
                                                <label>Gambar Saat Ini:</label>
                                                <img src="{{ asset('storage/' . $gallery->gambar) }}" alt="Current Image" class="img-fluid mt-2" style="max-height: 200px">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="sampel">Sampel</label>
                                                <select class="form-select" id="sampel" name="sampel">
                                                    <option value="0" {{ $gallery->sampel == 0 ? 'selected' : '' }}>Tidak</option>
                                                    <option value="1" {{ $gallery->sampel == 1 ? 'selected' : '' }}>Ya</option>
                                                </select>
                                                @error('sampel')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                            <a href="{{ route('gallery.index') }}" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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