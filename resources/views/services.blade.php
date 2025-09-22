<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Services</title>

    <!-- Font Awesome (for icons, offline version optional) -->
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
      <!-- Top Bar -->
  <div class="top-bar">
    <span><i class="fas fa-comment-dots"></i> LOOKING FOR SOLAR CONSULTING? GET IN TOUCH</span>
    <div class="socials">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
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




  <footer>
  <div class="footer">
    <div class="footer-top1">
      <img src="{{ asset('images/Famous-Solar-Logo-2-1.png')}}" alt="Famous Solar"/>
      <p>Famous  solar  is  a  renewable  energy<br> company  located  in  ibadan,  Nigeria. <br>We  specialize  in  Solar  and  Inverter<br> installation
      ,backup systems,  and  <br>CCTV  Camera  installion.</p>
    </div>

    <div class="help-links">
      <h1>Help Links</h1>
      <a href="{{ route('welcome') }}" class="active">Home</a>
      <a href="{{ route('about') }}">About Us</a>
      <a href="{{ route('services') }}">Services <i class="fas fa-caret-down"></i></a>
      <a href="{{ route('our-work') }}">Our Work</a>
      <a href="{{ route('contact') }}">Contact Us</a>
    </div>

    <div class="footer-top2">
      <h1>Services</h1>
      <a href="#">Solar Installation</a>
      <a href="#">Solar Maintenance</a>
      <a href="#">CCTV Camera Installation</a>
      <a href="#">Electrical Installion</a>
      <a href="#">Electric Fence Installation</a>
    </div>

    <div class="footer3">
      <h1>Get In Touch</h1>

      <p>Shop 26 Merit Complex Ajacent ST. Apata<br>
      Filling Station Odo Ona Elewe Road Orita<br>
    Ibadan</p>

    <p>+234689096423 & +23490183990</p>

    <p>famoussolar@yahoo.com<br>info@famoussolar.com</p>
    </div>
  </div>

  <hr>
<div class="ending">
  <p>Copyright &copy; 2025 Famous Solar. All Rights Reserved</p>

  <p>Designed by <span>Peter-vite Daniel</span></p>
  </div>
</footer>

<script>
  // document.getElementById('menu-toggle').addEventListener('click', function () {
  //   window.alert("njsdndcnj");
  // });

      let menubtn = document.getElementById("nav-icon");
    let closebtn = document.getElementById("nav-icon2")
    let sidenav = document.getElementById("nav-links");

    menubtn.addEventListener("click", function(){
      sidenav.style.display = "block";
      closebtn.style.display = "block";
    })

    closebtn.addEventListener("click", function(){
      sidenav.style.display = "none";
      closebtn.style.display = "none";
    })
    

</script>
</body>
</html>