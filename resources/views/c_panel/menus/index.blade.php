@extends('c_panel.layouts.app')
@section('title', 'Menu')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manajemen Menu</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manajemen Menu</li>
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
                            <h4 class="card-title">Informasi Menu</h4>
                            <a href="{{ route('menu.create') }}" class="btn btn-success btn-sm float-end">Tambah Menu</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Menu</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Best Seller</th>
                                                <th>Sampel</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($menus as $index => $menu)
                                            <tr>
                                                <td class="text-bold-500">{{ $index + 1 }}</td>
                                                <td class="text-bold-500">{{ $menu->nama }}</td>
                                                <td>{{ $menu->category->kategori }}</td>
                                                <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                                                <td>
                                                    @if($menu->best_seller)
                                                        <span class="badge bg-success">Yes</span>
                                                    @else
                                                        <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($menu->sampel)
                                                        <span class="badge bg-success">Yes</span>
                                                    @else
                                                        <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </td>
                                                <td class="text-bold-500"><img src="{{ Storage::url($menu->gambar) }}" alt="Gambar {{ $loop->iteration }}" width="100"></td>
                                                <td>
                                                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
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