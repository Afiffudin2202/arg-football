<footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo  align-items-center">
              <span>ARG FOOTBALL ACADEMY</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-tiktok"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ url('/about') }}">About us</a></li>
              {{-- <li><i class="bi bi-dash"></i> <a href="">Team</a></li> --}}
              <li><i class="bi bi-dash"></i> <a href="{{ url('/galeri') }}">Galeri</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 col-6 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>{{ $institusi->alamat }} <br><br>
              <strong>Phone:</strong> {{ $institusi->no_hp }}<br>
              <strong>Email:</strong> {{ $institusi->email }}<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>ARG Football</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->