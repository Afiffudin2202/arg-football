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
                                        onclick="window.location='{{ url('admin/staff') }}'">
                                        Kembali
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('staff.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_lengkap" class="form-label">Nama
                                                Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('nama_lengkap')
                                                is-invalid
                                            @enderror"
                                                name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}">
                                            @error('nama_lengkap')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="jabatan" class="form-label">Jabatan</label>
                                            <select name="jabatan" id="jabatan"
                                                class="form-select @error('jabatan')
                                                is-invalid
                                            @enderror">
                                                <option value="Pelatih Kepala">Pelatih Kepala
                                                </option>
                                                <option value="Asisten Pelatih">Asisten Pelatih</option>
                                                <option value="Pelatih Kiper">Pelatih Kiper
                                                </option>
                                                <option value="Administrasi">Administrasi</option>
                                            </select>
                                            @error('jabatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto</label>
                                            <input type="file"
                                                class="form-control @error('foto')
                                                is-invalid
                                            @enderror"
                                                name="foto" value="{{ old('foto') }}">
                                            @error('nama_lengkap')
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
