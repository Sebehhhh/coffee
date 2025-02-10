@extends('c_panel.layouts.app')
@section('title', 'Story')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manajemen Cerita</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manajemen Cerita</li>
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
                            <h4 class="card-title">Informasi Story</h4>
                            @if($stories->isEmpty())
                                <a href="{{ route('story.create') }}" class="btn btn-success btn-sm float-end">Tambah Cerita</a>
                            @endif
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Gambar</th>
                                                <th>Cerita</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($stories as $index => $story)
                                            <tr>
                                                <td class="text-bold-500">{{ $index + 1 }}</td>
                                                <td class="text-bold-500"><img src="{{ Storage::url($story->gambar) }}" alt="Story Image" width="100"></td>
                                                <td>{{ $story->cerita }}</td>
                                                <td>
                                                    <a href="{{ route('story.edit', $story->id) }}" class="btn btn-primary btn-sm">Edit</a>
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