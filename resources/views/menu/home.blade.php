@extends('index')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">ARG FOOTBALL ACADEMY</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p> Kami adalah tempat di mana bakat ditumbuhkan, keterampilan diperbaiki, dan mimpi dikejar. Dengan
                            staf pelatih berpengalaman dan fasilitas terbaik, kami berkomitmen untuk membantu para pemain
                            mencapai potensi tertinggi mereka dalam dunia sepakbola. </p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ url('about') }}" class="btn-get-started">About Us</a>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Hero Section -->
    <main id="main">
        <!-- ======= Tentang Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang <br>ARG FOOTBALL ACADEMY</h3>
                        <div class="row ">
                            <p>{!! $tentang->isi !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="phone-wrap">
                            <img src="{{ asset('/') }}assets/img/phone-wrap.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>

            {{-- program dan aktivitas  --}}
            <div class="details">
                <div class="container" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-lg-7">
                            <h4>Program dan <br>Fasilitas</h4>
                            <div class="row">

                                {{-- Program --}}
                                    <div class="col-md-6">
                                        <div class="icon-list d-flex">
                                            <span>{!! $program->isi !!}</span>
                                        </div>
                                    </div><!-- End Icon List Item-->



                                {{-- Fasilitas --}}
                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <span>{!! $fasilitas->isi !!}</span>
                                    </div>
                                </div>
                                <!-- End Icon List Item-->


                            </div>
                            <a href="#about" class="btn-get-started mt-3">Daftar Disini</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- End Tentang Section -->

        <!-- ======= bergabung Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Bergabunglah Bersama Kami</h3>
                        <p>Sekolah Sepakbola XYZ telah menjadi bagian integral dalam komunitas sepakbola lokal selama
                            lebih dari satu dekade. Didirikan dengan tujuan untuk menyediakan platform bagi pemain muda
                            untuk berkembang dalam olahraga ini, kami telah mencetak beberapa bakat terbaik dalam
                            sepakbola regional. Visi kami adalah menciptakan lingkungan yang mendukung, inspiratif, dan
                            penuh semangat untuk mengasah bakat sepakbola masa depan.</p>
                        <a class="cta-btn" href="#">Daftar Di sini</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End bergabung Section -->

        <!-- ======= FAQ ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>FAQ</h2>
                </div>

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-xl-5 img-bg"
                        style="background-image: url('{{ asset('/') }}assets/img/home3.jpg')"></div>
                    <div class="col-xl-7 slides  position-relative">
                        <div class="slides-1 swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Apa program latihan di ARG ?</h3>
                                        <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima
                                            maiores quidem, dolorum.</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam
                                            perferendis asperiores explicabo vel tempore velit totam, natus nesciunt
                                            accusantium dicta quod quibusdam ipsum maiores nobis non, eum. Ullam
                                            reiciendis dignissimos laborum aut, magni voluptatem velit doloribus quas
                                            sapiente optio.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Apa fasilitas di ARG ?</h3>
                                        <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos
                                            aliquam quis.</h4>
                                        <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime
                                            necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus
                                            autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat
                                            dolor.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Dimana lokasi ARG ?</h3>
                                        <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae
                                            voluptatum.</h4>
                                        <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut
                                            itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum.
                                            Voluptas enim dolorum fugiat aut.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Bagaimana cara daftar di ARG ?</h3>
                                        <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti
                                            laborum soluta nihil est. Eum similique neque autem ut.</h4>
                                        <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at
                                            voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui
                                            animi animi rerum.</p>
                                    </div>
                                </div><!-- End slide item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End FAQ -->

        <!-- ======= Galeri Section ======= -->
        <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Galeri</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($galeri as $item)
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-box">
                                <div class="post-img"><img src="{{ asset('storage/' . $item->gambar) }}"
                                        class="img-size-home" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Galeri Section -->


    </main>
    <!-- End #main -->
@endsection
