@php
    $currentUrl = Request::url();
@endphp
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">ARG Football Academy</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ Str::contains($currentUrl, [ 'home',])  ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ url('about') }}" class="{{ Str::contains($currentUrl, 'about') ? 'active' : '' }}">About</a></li>
          {{-- <li><a href="team.html">Team</a></li> --}}
          <li class="dropdown "><a href="#" class="{{ Str::contains($currentUrl, ['u-12', 'u-15', 'u-17', 'u-19']) ? 'active' : ''}}"><span>Soccer School</span> <i class="bi bi-chevron-down dropdown-indicator "></i></a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item {{ Str::contains($currentUrl, 'u-12') ? 'active' : '' }} "  href="{{ url('u-12') }}">U-12</a></li>
              <li><a class="dropdown-item {{ Str::contains($currentUrl, 'u-15') ? 'active' : ''}}" href="{{ url('u-15') }}">U-15</a></li>
              <li><a class="dropdown-item {{ Str::contains($currentUrl, 'u-17') ? 'active' : ''}}" href="{{ url('u-17') }}">U-17</a></li>
              <li><a class="dropdown-item {{ Str::contains($currentUrl, 'u-19') ? 'active' : ''}}" href="{{ url('u-19') }}">U-19</a></li>
            </ul>
          </li>
          <li><a href="{{ url('galeri') }}" class="{{ Str::contains($currentUrl, 'galeri') ? 'active' : '' }}">Galeri</a></li>
          <li><a href="{{ url('contact') }}" class="{{ Str::contains($currentUrl, 'contact') ? 'active' : '' }}">Contact</a></li>
          <li><a href="{{ url('daftar') }}" class="{{ Str::contains($currentUrl, 'daftar') ? 'active' : '' }}">Daftar Online</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->