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
                                    <button type="button" class="btn btn-outline-primary block" onclick="window.location='{{ url('admin/pendaftaran') }}'">
                                        Kembali 
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <table class="table  w-80" >
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>{{ $daftar->nama_lengkap }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Panggilan</th>
                                        <td>{{ $daftar->nama_panggilan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $daftar->tmpt_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $daftar->tgl_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ayah</th>
                                        <td>{{ $daftar->nama_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ibu</th>
                                        <td>{{ $daftar->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <th>Asal Sekolah</th>
                                        <td>{{ $daftar->asal_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{ $daftar->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>{{ $daftar->agama }}</td>
                                    </tr>
                                    <tr>
                                        <th>No HP</th>
                                        <td>{{ $daftar->no_hp }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
