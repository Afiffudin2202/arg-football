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
                                        onclick="window.location='{{ route('siswa.index') }}'">
                                        Kembali
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('siswa.update', $siswa) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_lengkap" class="form-label">Nama
                                                Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('nama_lengkap')
                                                is-invalid
                                            @enderror"
                                                name="nama_lengkap" id="nama_lengkap"
                                                value="{{ old('nama_lengkap', $siswa->nama_lengkap) }}">
                                            @error('nama_lengkap')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="ku_umur" class="form-label">Ku-Usia</label>
                                            <select name="ku_umur" id="ku_umur"
                                                class="form-select @error('ku_umur')
                                                is-invalid
                                            @enderror">
                                                <option value="{{ $siswa->ku_umur }}"> {{ $siswa->ku_umur }}
                                                </option>
                                                <option value="U-12">U-12
                                                </option>
                                                <option value="U-15">U-15</option>
                                                <option value="U-17">U-17
                                                </option>
                                                <option value="U-19">U-19</option>
                                            </select>
                                            @error('ku_umur')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="posisi"
                                                class="form-label @error('posisi')
                                                is-invalid
                                            @enderror">Posisi</label>
                                            <select name="posisi" id="posisi" class="form-select">
                                                <option value="{{ $siswa->posisi }}">
                                                    {{ $siswa->posisi }}</option>
                                                <option value="GoalKeeper">GoalKeeper
                                                </option>
                                                <option value="Defender">Defender
                                                </option>
                                                <option value="Midfielder">Midfielder
                                                </option>
                                                <option value="Forward">Forward
                                                </option>
                                            </select>
                                            @error('posisi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_punggung" class="form-label">No Punggung</label>
                                            <input type="text"
                                                class="form-control @error('no_punggung')
                                                is-invalid
                                            @enderror"
                                                name="no_punggung" value="{{ old('no_punggung', $siswa->no_punggung) }}">
                                            @error('no_pungung')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto</label>
                                            <div class="my-3">
                                                <img src="{{ asset('storage/' . $siswa->foto) }}" alt=""
                                                    width="100px">
                                            </div>
                                            <input type="hidden" value="{{ $siswa->foto }}" name="oldImage">
                                            <input type="file"
                                                class="form-control @error('foto')
                                                                                    is-invalid
                                                                                @enderror"
                                                name="foto" value="{{ old('foto', $siswa->foto) }}">
                                            @error('foto')
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
