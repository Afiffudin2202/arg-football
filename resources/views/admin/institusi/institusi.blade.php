@extends('admin.layouts-admin.main')
@section('content')
    <div class="page-content">
        <section class="row">
            {{-- col tengah  --}}
            <div class="col-12 col-lg-12">
                <div class="row">
                    <section class="section">
                        <div class="card">

                            {{-- Form --}}
                            <form action="{{ route('institusi.store') }}" method="post">
                                <div class="card-body">
                                    @csrf
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="nama_institusi" class="form-label">Nama Institusi</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="text" class="form-control" name="nama_institusi"
                                                    id="nama_institusi" placeholder="Nama Institusi"
                                                    value="{{ $institusi ? $institusi->nama_institusi : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="alamat" class="form-label">Alamat</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="text" class="form-control" name="alamat" id="alamat"
                                                    placeholder="Alamat"
                                                    value="{{ $institusi ? $institusi->alamat : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="no_hp" class="form-label">Nomor Telepon</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="number" class="form-control" name="no_hp" id="no_hp"
                                                    placeholder="No Telepon"
                                                    value="{{ $institusi ? $institusi->no_hp : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="email" class="form-label">Email</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="text" class="form-control" name="email" id="email"
                                                    placeholder="Email" value="{{ $institusi ? $institusi->email : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="instagram" class="form-label">Instagram</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="text" class="form-control" name="instagram" id="instagram"
                                                    placeholder="instagram"
                                                    value="{{ $institusi ? $institusi->instagram : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="tiktok" class="form-label">Tiktok</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="text" class="form-control" name="tiktok" id="tiktok"
                                                    placeholder="tiktok" value="{{ $institusi ? $institusi->tiktok : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="facebook" class="form-label">Facebook</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input type="text" class="form-control" name="facebook" id="facebook"
                                                    placeholder="facebook"
                                                    value="{{ $institusi ? $institusi->facebook : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </h5>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
