@extends('index')
@section('content')
    <main id="main ">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/desain.png');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>About</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                            <h3 class="text-center">About ARG Football Academy</h3>
                            <p class="text-center">
                                {!! $tentang->isi !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            @foreach ($foto as $item)
                                <div class="col-lg-4 ">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="" width="100%"
                                        height="200px">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row justify-content-center pt-5">
                            <div class="col-lg-4">
                                <h3>Misi</h3>
                            </div>
                            <div class="col-lg-4">
                                @if ($visi)
                                    <p>{!! $visi->isi !!}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-center pt-5">
                            <div class="col-lg-4">
                                <h3>Visi</h3>
                            </div>
                            <div class="col-lg-4">
                                @if ($misi)
                                    {!! $misi->isi !!}
                                @endif

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- End Why Choose Us Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>

                </div>

                <div class="row gy-4">

                    @foreach ($team as $team)
                        <div class="col-lg-3 col-md-6 p-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('storage/' . $team->foto) }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $team->nama_lengkap }}</h4>
                                    <span>{{ $team->jabatan }}</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach


                </div>

            </div>
        </section>
        <!-- End Team Section -->

    </main>
    <!-- End #main -->
@endsection
