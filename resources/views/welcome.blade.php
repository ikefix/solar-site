@extends('layouts.app')

@section('title', 'Welcome to Famous Solar')
@section('description', 'Famous Solar - Reliable solar, inverter, and energy solutions for homes and businesses in River-state, Nigeria.')

@section('content')

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
      <div class="hero-content">
        <h1>Innovating Energy, Building Trust.<br>With Joemmaxx Global services!</h1>
        <p>
          Clean, reliable energy and smart solutions for homes, businesses, and communities.
        </p>
          <a href="{{ route('contact') }}" class="hero-btn">Take Action Now</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="feature-card">
        <div class="icon"><i class="fas fa-handshake"></i></div>
        <h3>Quality Materials and Service</h3>
        <p>Quality service, lasting solutions, and sustainable energy you can depend on.</p>
      </div>

      <div class="feature-card">
        <div class="icon"><i class="fas fa-user-hard-hat"></i></div>
        <h3>Experienced Team</h3>
        <p>We have a Team of professionals with Years of experience and track records of excellence</p>
      </div>

      <div class="feature-card">
        <div class="icon"><i class="fas fa-star"></i></div>
        <h3>Unique Technologies</h3>
        <p>We choose products and materials based on latest technologies, regulating standards and requirements by customers.</p>
      </div>
    </div>
  </section>

  <!-- Asset Section -->
  <section class="asset-section">
    <div class="container">
      <img src="{{ asset('images/Famous-Solar-Company-in-Ibadan-Nigeria.jpg') }}" alt="Solar Panels">
      <div class="asset">
        <h5>Your Perfect Solar and Engineering  Company in Nigeria</h5>
        <h1></h1>
        <p>We’re the best solar company in Ibadan, Nigeria. We specialize in <a href="#">Solar & Inverter installation</a>, Solar products, Backup Systems, Solar Maintenance,<a href="#"> CCTV Camera installation</a>. We’re dedicated to reshaping the way you think about energy.</p>
        <div class="call">
          <div class="call-item">
            <i class="fas fa-phone-alt"></i>
            <div>
              <h5>Call us</h5>
              <span>+2348075561016</span>
            </div>
          </div>
          <div class="call-item">
            <i class="fas fa-comment-dots"></i>
            <div>
              <h5>Whatsapp us</h5>
              <span>+2348075561016</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="value-section">
    <div class="container">
      <h2>Our Solar Services</h2>
      <p class="subtitle">ALTERNATIVE ENERGY SOLUTIONS</p>
      <div class="service-cards">
        <div class="card">
          <img src="{{ asset('images/fixing-solar.webp') }}" alt="Solar Installation">
          <div>
            <h3>Solar for Utilities</h3>
            <p>We install applications like solar water heaters, street-lights, water pumps, and more.</p>
            <a href="{{ route('about')}}">Learn More</a>
          </div>
        </div>

        <div class="card">
          <img src="{{ asset('images/fixing-solar2.jpg') }}" alt="Solar Installation">
          <div>
            <h3>Solar for Utilities</h3>
            <p>We install applications like solar water heaters, street-lights, water pumps, and more.</p>
            <a href="{{ route('about')}}">Learn More</a>
          </div>
        </div>

        <div class="card">
          <img src="{{ asset('images/benjamin-jopen-2SfssudtyIA-unsplash.jpg') }}" alt="Solar Installation">
          <div>
            <h3>Solar for Utilities</h3>
            <p>We install applications like solar water heaters, street-lights, water pumps, and more.</p>
            <a href="{{ route('about')}}">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Hero 2 Section -->
  <section class="hero2">
    <div class="hero-overlay2">
      <div>
        <h1>We Offer Commercial And Residential Solar Solutions</h1>
        <p>We provide reliable, sustainable, ECO friendly, cost-effective, and independent energy solutions <br> for households and businesses, which give them total control over electricity usage.</p>
      </div>
      <a href="{{ route('free-quote') }}" class="quote-btn1">Request A Quote</a>
    </div>
  </section>

  <!-- Other Services Section -->
  <section class="value-section">
    <div class="container">
      <h2>OUR OTHER SERVICES</h2>
      <p class="subtitle">WE ARE MORE THAN A SOLAR COMPANY</p>
      <div class="service-cards">
        <!-- repeat service cards -->
      </div>
    </div>
  </section>

  <!-- Hero 3 Section -->
  <section class="hero3">
    <div class="hero-overlay3">
      <div class="contact">
        <h1>WHY FAMOUS SOLAR SERVICES?</h1>
        <p>When you choose us for your project, know you're getting highly qualified professionals <br>who have the expertise and experience to make sure your project is done properly and<br> functions. Here are also 4 reasons why you should choose us</p>
        <div class="suggestions">
          <div>
            <div><i class="fas fa-star"></i><p>Best energy Solutions</p></div>
            <div><i class="fas fa-star"></i><p>Commited to your success</p></div>
          </div>
          <div>
            <div><i class="fas fa-star"></i><p>Save your Money</p></div>
            <div><i class="fas fa-star"></i><p>Absolute safety</p></div>
          </div>
        </div>
        <a href="{{ route('contact') }}" class="quote-btn3">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="solar-pic">
    <div class="container">
      <h2>LATEST PROJECTS</h2>
      <p class="subtitle">WORKS ACROSS THE NATION</p>
      <div class="img">
        <img src="" alt="">
        <img src="" alt="">
        <!-- more images -->
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta">
    <div class="cta-section">
      <h1>HAVE QUESTIONS? WE ARE HERE TO HELP YOU!</h1>
      <p>Need Emergency Help? Call or email us 24/7 support team<br>at 
        <span>+2348075561016</span>
      </p>
    </div>
    <a href="#" class="quote-btn4"><i class="fas fa-phone-alt"></i> Call US Today</a>
  </section>

  <!-- Quote Form Section -->
  <section class="form">
    <div class="contain">
      <div class="form-side">
        <h2>Save Your Money,<br> Save Your Properties,<br> Save Environment!</h2>
        <p>If you have any questions or need help, feel free to<br>contact our team...</p>
        <a href="#" class="quote-btn5"><i class="fas fa-comment-dots"></i> Chat With Us</a>
      </div>

      <div class="form-side2">
        <h1>REQUEST A QUOTE</h1>
        <p>We take pride in everything we do...</p>
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

@endsection
