@extends('admin.layouts-admin.main')
@section('content')
    <div class="page-content">
        <section class="row">
            {{-- col tengah  --}}
            <div class="col-12 col-lg-12">
                <div class="row">
                    <section class="section">
                        <div class="card p-3">
                          <p>{!! $general->isi !!}</p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
