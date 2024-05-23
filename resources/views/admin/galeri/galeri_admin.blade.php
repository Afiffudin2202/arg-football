@extends('admin.layouts-admin.main')
@section('content')
    <div class="page-content">
        <section class="row">
            {{-- col tengah  --}}
            <div class="col-12 col-lg-12">
                <div class="row">
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <button type="button" class="btn btn-outline-primary block"
                                        onclick="window.location='{{ route('galeri.create') }}'">
                                        Tambah Data
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galeri as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td><img src="{{ asset('storage/' . $item->gambar) }}"
                                                        alt="{{ $item->judul }}" width="50px" srcset=""></td>
                                                <td class="">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-warning"
                                                            onclick="window.location='{{ route('galeri.edit', $item) }}'">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>

                                                        {{-- modal edit --}}
                                                        <div class="modal fade text-left"
                                                            id="modalEdit{{ route('galeri.edit', $item) }}" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel1"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-scrollable"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel1">
                                                                            Edit
                                                                            Data</h5>
                                                                        <button type="button" class="close rounded-pill"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <i data-feather="x"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- modal edit end --}}
                                                        <form id="deleteForm" action="{{ route('galeri.destroy', $item) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm(event)">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
