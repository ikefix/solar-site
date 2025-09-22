<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free Quote</title>
    <!-- Font Awesome (for icons, offline version optional) -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .hero h1{
            text-align: center;
            margin-left: 36%;
            color: #fff;
            font-size: 40px;
        }

        .h1{
            text-align: center;
            /* margin-left: 29%; */
            color: #030f27;
            font-size: 40px;
            margin-top: 40px;   
        }

        .hero{
            clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);
            height: 65vh;
        }

        .form{
            background: #fff;
        }

        .contain{
            margin-top: 10px;
            padding: 50px 80px;
        }
    </style>
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

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
        <h1>GET FREE QUOTE</h1>
    </div>
  </section>

  
  <h1 class="h1">SEND US A REQUEST</h1>
<section class="form">
  <div class="contain">
  <div class="form-side">
    <h2>Save Your Money,<br> Save Your Properties,<br> Save Environment!</h2>
    <p>If you have any questions or need help, feel free to<br>
      contact with our team, or you can call or chat us any<br>
      time.</p>

      <a href="#" class="quote-btn5"><i class="fas fa-comment-dots"></i>Chat With Us</a>
  </div>

  <div class="form-side2">
    <h1>Don't Hesitate To Request</h1>
    <p>We take pride in everything we do, control over products allows us to ensure<br>
    our customers receive the best quality service.</p>

    <div class="container">
          @if(session('success'))
    <div style="background: #d1e7dd; color: #0f5132; padding: 12px; border-radius: 8px; margin-bottom: 15px; font-weight: bold;">
        {{ session('success') }}
    </div>
@endif
          <form action="{{ route('feedback.send') }}" method="POST">
    @csrf
    <div class="user-details">
        <div class="input-box">
            <input type="text" name="fullname" placeholder="Enter your name" required>
        </div>

        <!-- Removed duplicate username field (fullname already covers it) -->

        <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-box">
            <input type="number" name="phone" placeholder="Number" required>
        </div>

        <div class="input-box">
            <input type="text" name="location" placeholder="Location" required>
        </div>

        <div class="gender-details">
            <!-- Changed name="gender" to name="contact_method" -->
            <input type="radio" name="contact_method" value="Call" id="dot-1">
            <input type="radio" name="contact_method" value="Email" id="dot-2">
            <input type="radio" name="contact_method" value="Whatsapp" id="dot-3">

            <span class="gender-title">Contact Method</span>
            <div class="category">
                <label for="dot-1"><span class="dot one"></span><span class="gender">Call</span></label>
                <label for="dot-2"><span class="dot two"></span><span class="gender">Email</span></label>
                <label for="dot-3"><span class="dot three"></span><span class="gender">Whatsapp</span></label>
            </div>
        </div>

        <textarea name="details" placeholder="Additional Details!" required></textarea>
    </div>
    <div class="button">
        <input type="submit" value="SUBMIT REQUEST">
    </div>
</form>
    </div>
  </div>
  </div>
</section>

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