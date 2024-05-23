@extends('index')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/team-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Team</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li> {{ $ku_umur }} </li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container " data-aos="fade-up">

                <div class="section-header">
                    <h2>Daftar Tim {{ $ku_umur }}</h2>
                    <p>Berikut daftar pemain ARG Football Academy {{ $ku_umur }}</p>
                </div>



                @if (isset($siswa))
                    <div class="row ">
                        @foreach ($siswa as $item)
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="team-member shadow-sm p-5">
                                    <div class="member-img">
                                        <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $item->nama_lengkap }}</h4>
                                        <span>{{ $item->posisi }}</span>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach
                    </div>
                @elseif (isset($siswa15))
                    <div class="row ">
                        @foreach ($siswa15 as $item)
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="team-member shadow-sm p-5">
                                    <div class="member-img">
                                        <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $item->nama_lengkap }}</h4>
                                        <span>{{ $item->posisi }}</span>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach
                    </div>
                @elseif (isset($siswa17))
                    <div class="row ">
                        @foreach ($siswa17 as $item)
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="team-member shadow-sm p-5">
                                    <div class="member-img">
                                        <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $item->nama_lengkap }}</h4>
                                        <span>{{ $item->posisi }}</span>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach
                    </div>
                @elseif (isset($siswa19))
                    <div class="row ">
                        @foreach ($siswa19 as $item)
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="team-member shadow-sm p-5">
                                    <div class="member-img">
                                        <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $item->nama_lengkap }}</h4>
                                        <span>{{ $item->posisi }}</span>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach
                    </div>
                @endif

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
