  <!-- Top Bar -->
  <div class="top-bar">
    <span><i class="fas fa-comment-dots"></i> LOOKING FOR SOLAR CONSULTING? GET IN TOUCH</span>
    <div class="socials">
      <a href=""><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
  </div>


  <!-- Navbar -->
  <nav class="main-nav">
    <div class="nav-logo">
      <img src="{{ asset('images/Famous-Solar-Logo-2-1.png')}}" alt="Famous Solar"/>
    </div>

    
  <button class="menu-toggle" id="nav-icon">
    <i class="fas fa-bars"></i>
  </button>


    <ul class="nav-links" id="nav-links">
      <button class="menu-toggle" id="nav-icon2">
          <i class="fas fa-close"></i>
     </button>

      <li><a href="{{ route('welcome') }}" class="active">Home</a></li>
      <li><a href="{{ route('about') }}">About Us</a></li>

     <ul id="dropdown">
      <li><a href="#">Services <i class="fas fa-caret-down"></i></a></li>
      <ul class="dropdown">
        <li><a href="{{ route('solar') }}">Solar Services</a></li>
      <hr>
      <li><a href="{{ route('cctv-services') }}">CCTV Services</a></li>
      <hr>
      <li><a href="{{ route('inverter-services') }}">Inverter Installation</a></li>
      <hr>
      <li><a href="{{ route('electrical-services') }}">Electrical Wiring</a></li>
      <hr>
      <li><a href="{{ route('maintenance-services') }}">Maintenance & Repairs</a></li>
      <hr>
      <li><a href="{{ route('networking-services') }}">Networking & IT Setup</a></li>
      </ul>
      </ul>
      <li><a href="{{ route('our-work') }}">Our Work</a></li>
      <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
    <a href="{{ route('free-quote') }}" class="quote-btn">Get A Quote</a>
  </nav>
