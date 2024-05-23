@extends('admin.layouts-admin.main')
@section('content')
    <div class="page-content">
        <section class="row">
            {{-- col tengah  --}}
            <div class="col-12 col-lg-12">
                <div class="row">
                    <section class="section">
                        <div class="card p-3">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <button type="button" class="btn btn-outline-primary block"
                                        onclick="window.location='{{ url('admin/institusi') }}'">
                                        Kembali
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('institusi.store') }}" method="post" >
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <select name="judul" id="judul" class="form-select">
                                                <option value="">Pilih Judul</option>
                                                <option value="Tentang">Tentang</option>
                                                <option value="Visi">Visi</option>
                                                <option value="Misi">Misi</option>
                                                <option value="Program">Program</option>
                                                <option value="Fasilitas">Fasilitas</option>
                                            </select>
                                            {{-- <input type="text"
                                                class="form-control @error('judul')
                                                    is-invalid
                                                @enderror"
                                                name="judul" id="judul" value="{{ old('judul') }}"> --}}
                                            @error('judul')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="isi" class="form-label">Deskripsi</label>
                                            <input id="isi" type="hidden" name="isi"
                                                class="form-control @error('isi')
                                                is-invalid
                                            @enderror"
                                                value="{{ old('isi') }}">
                                            <trix-editor id="isi" input="isi" class="form-control"></trix-editor>
                                            @error('isi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Simpan</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
