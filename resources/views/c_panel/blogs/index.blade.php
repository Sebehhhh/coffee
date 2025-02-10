@extends('c_panel.layouts.app')
@section('title', 'Blog')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manajemen Blog</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manajemen Blog</li>
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
                            <h4 class="card-title">Informasi Blog</h4>
                            <a href="{{ route('blog.create') }}" class="btn btn-success btn-sm float-end">Tambah Blog</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Penulis</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($blogs as $index => $blog)
                                            <tr>
                                                <td class="text-bold-500">{{ $index + 1 }}</td>
                                                <td>{{ $blog->user->name }}</td>
                                                <td class="text-bold-500">{{ $blog->judul }}</td>
                                                <td>{{ Str::limit($blog->deskripsi, 100) }}</td>
                                                <td class="text-bold-500"><img src="{{ Storage::url($blog->gambar) }}" alt="Gambar {{ $loop->iteration }}" width="100"></td>
                                                <td>
                                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
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