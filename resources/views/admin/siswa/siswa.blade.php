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
                                    <button type="button" class="btn btn-outline-primary block" onclick="window.location='{{ route('siswa.create') }}'">
                                        Tambah Data
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ku-Usia</th>
                                            <th>Nama Lengap</th>
                                            <th>No Punggung</th>
                                            <th>Posisi</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->ku_umur }}</td>
                                                <td>{{ $item->nama_lengkap }}</td>
                                                <td>{{ $item->no_punggung }}</td>
                                                <td>{{ $item->posisi }}</td>
                                                <td><img src="{{ asset('storage/' . $item->foto) }}" alt=""
                                                        width="50px"></td>
                                                <td class="">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-warning" onclick="window.location='{{ route('siswa.edit', $item) }}'">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <form id="deleteForm"
                                                            action="{{ route('siswa.destroy', $item) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm(event)">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                        {{-- <button class="btn btn-success btn-sm"
                                                            onclick="window.location='{{ route('siswa.show', $item) }}'"><i
                                                                class="bi bi-three-dots"></i></button> --}}
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
