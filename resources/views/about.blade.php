@extends('layouts.app')

@section('title', 'Welcome to Famous Solar')
@section('description', 'Famous Solar - Reliable solar, inverter, and energy solutions for homes and businesses in River-state, Nigeria.')

@section('content')

    <style>
        .hero h1{
            text-align: center;
            color: #fff;
            font-size: 40px;
            margin-left: 16rem;

        }

        .hero{
            clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);
            height: 65vh;
        }

        .hero3{
          margin-top: 7%
        }
        

        .about-section {
  padding: 80px 20px;
  background-color: #fff;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.about-content {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
  align-items: flex-start;
  justify-content: space-between;
}

.about-left,
.about-right {
  flex: 1 1 48%;
}

.about-right {
  margin-top: 9rem;
}

.small-heading {
  color: #f97316;
  font-size: 1rem;
  font-weight: bold;
  margin-bottom: 10px;
}

.main-heading {
  color: #1e3a8a;
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 20px;
  line-height: 1.4;
}

.about-left img {
  width: 100%;
  border-radius: 4px;
  margin-top: 20px;
}

.about-right p {
  font-size: 1rem;
  line-height: 1.7;
  color: #333;
  margin-bottom: 15px;
}

.highlight {
  color: #f97316;
  font-weight: 500;
}

.orange-btn {
  display: inline-block;
  margin-top: 15px;
  background-color: #f97316;
  color: white;
  padding: 12px 24px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s ease;
}

.orange-btn:hover {
  background-color: #e35f0b;
}

/* Responsive */
@media (max-width: 768px) {
  .about-content {
    flex-direction: column;
  }

  .about-left,
  .about-right {
    flex: 1 1 100%;
  }

  .main-heading {
    font-size: 1.3rem;
  }

  .hero h1{
    margin-left: 0%
  }
}
    </style>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
        <h1>SOLAR ENERGY COMPANY IN IBADAN</h1>
    </div>
  </section>
<!-- About Section -->
<section class="about-section">
  <div class="container">
    <div class="about-content">
      <div class="about-left">
        <h4 class="small-heading">WHO ARE FAMOUS SOLAR</h4>
        <h2 class="main-heading">WE ARE LEADING SOLAR ENERGY COMPANY IN IBADAN, NIGERIA</h2>
        <img src="{{ asset('images/Solar-Installation-Famous-Solar-2-768x576.jpg') }}" alt="Solar Panels">
      </div>

      <div class="about-right">
        <p>
          <span class="highlight">Famous Solar</span> is a solar energy company located in Ibadan, Nigeria.
          We specialize in <span class="highlight">Solar and Inverter installation</span>,
          Backup Systems, and <span class="highlight">CCTV Camera installation</span>.
          At Famous Solar we provide a steady power supply and security to homes and businesses
          using clean energy from the sun.
        </p>

        <p>
          We’re dedicated to reshaping the way you think about energy. Going green offers a variety of
          benefits in both the short and long term: lowered energy costs, reduction of your carbon footprint,
          and increased property value. Whether you’re a homeowner tired of arbitrary price hikes from
          the utility company, or a business leader seeking ways to optimize your money, going solar is
          a great option for you. We provide reliable solutions that produce clean energy, reduce costs,
          give back control, and benefit the environment.
        </p>

        <a href="#" class="orange-btn">Our Projects</a>
      </div>
    </div>
  </div>
</section>

<section class="value-section">
  <div class="container">
    <div class="service-cards">
      <div class="card">
        <img src="{{ asset('images/benjamin-jopen-2SfssudtyIA-unsplash.jpg') }}" alt="Solar Installation">
        <div>
        <h3>Solar for Utilities</h3>
        <p>We install applications like solar water heaters, street-lights, water pumps, and more.</p>
        <a href="#">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img src="{{ asset('images/fixing-solar2.jpg') }}" alt="Solar Installation">
        <div>
        <h3>Solar for Utilities</h3>
        <p>We install applications like solar water heaters, street-lights, water pumps, and more.</p>
        <a href="#">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img src="{{ asset('images/fixing-solar.webp') }}" alt="Solar Installation">
        <div>
        <h3>Solar for Utilities</h3>
        <p>We install applications like solar water heaters, street-lights, water pumps, and more.</p>
        <a href="#">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  
</section>

<section class="cta">
  <div class="cta-section">
    <h1>HAVE QUESTIONS? WE ARE HERE TO HELP YOU!</h1>
    <p>We're Renewable Energy Generation Company-Need Emergency Help? Call or email us 24/7 support team<br>at 
    <span>+2348075561016</span></p>
  </div>
  <a href="#" class="quote-btn4"><i class="fas fa-phone-alt"></i>
  Call US Today</a>
</section>


<section class="hero3">
    <div class="hero-overlay3">
      <div class="contact">
        <h1>WHY FAMOUS SOLAR SERVICES?</h1>
        <P>When you choose us for your project, know you're getting highly qualified professionals<br> who have 
          the expertise and experience to make sure your project is done properly and<br> functions. Here are also 4 reasons why you should choose us
        </P>
        <div class="suggestions">
          <div>
            <div>
            <i class="fas fa-star"></i>
            <p>Best energy Solutions</p>
            </div>
            <div>
            <i class="fas fa-star"></i>
            <p>Commited to your success</p>
            </div>
          </div>
          <div>
            <div>
            <i class="fas fa-star"></i>
            <p>Save your Money</p>
            </div>
            <div>
            <i class="fas fa-star"></i>
            <p>Absolute safety</p>
            </div>
          </div>
        </div>
        <a href="{{ route('contact')}}" class="quote-btn3">Contact Us</a>
      </div>
    </div>
</section>

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
    <h1>REQUEST A QUOTE</h1>
    <p>We take pride in everything we do, control over products allows us to ensure<br>
    our customers receive the best quality service.</p>

    <div class="container">
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