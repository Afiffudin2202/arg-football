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
                                        onclick="window.location='{{ url('admin/galeri') }}'">
                                        Kembali
                                    </button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('galeri.update', $galeri) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text"
                                                class="form-control @error('judul')
                                                is-invalid
                                            @enderror"
                                                name="judul" id="judul" value="{{ old('judul', $galeri->judul) }}">
                                            @error('judul')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Ku-Usia</label>
                                            <select name="kategori" id="kategori"
                                                class="form-select @error('kategori')
                                                is-invalid
                                            @enderror">
                                                <option value="{{ $galeri->kategori }}">{{ $galeri->kategori }}</option>
                                                <option value="Training">Training
                                                </option>
                                                <option value="Event">Event</option>
                                                <option value="Friendly-match">Friendly Match
                                                </option>
                                            </select>
                                            @error('kategori')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <div class="my-3">
                                                <img src="{{ asset('storage/' . $galeri->gambar) }}" alt=""
                                                    width="150px">
                                            </div>
                                            <input type="file"
                                                class="form-control @error('gambar')
                                                is-invalid
                                            @enderror"
                                                name="gambar" id="gambar" value="{{ old('gambar', $galeri->gambar) }}">
                                            @error('gambar')
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
