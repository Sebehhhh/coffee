@extends('c_panel.layouts.app')
@section('title', 'Banner')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manajemen Banner</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manajemen Banner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Tables start -->
        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi Banner</h4>
                            <a href="{{ route('banner.create') }}" class="btn btn-success btn-sm float-end">Tambah Banner</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Sub Judul</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($banners as $index => $banner)
                                            <tr>
                                                <td class="text-bold-500">{{ $index + 1 }}</td>
                                                <td class="text-bold-500">{{ $banner->judul }}</td>
                                                <td>{{ $banner->sub_judul }}</td>
                                                <td class="text-bold-500"><img src="{{ Storage::url($banner->gambar) }}" alt="Gambar {{ $loop->iteration }}" width="100"></td>
                                                <td>
                                                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
