@extends('layouts.app')

@section('title', 'Welcome to Famous Solar')
@section('description', 'Famous Solar - Reliable solar, inverter, and energy solutions for homes and businesses in River-state, Nigeria.')

@section('content')

  <style>
    .hero {
      clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);
      height: 69vh;
      background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url("{{ asset('images/cctv-bg.jpg') }}");
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .hero h1 {
      text-align: center;
      margin-left: 19%;
      color: #fff;
      font-size: 44px;
    }

    /* CCTV Services Section */
    .services-section {
      padding: 60px 20px;
      background: #f9f9f9;
    }
    .services-section h2 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 10px;
      color: #222;
    }
    .services-section p.lead {
      text-align: center;
      font-size: 1.1rem;
      max-width: 800px;
      margin: 0 auto 40px;
      color: #555;
    }
    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 24px;
      max-width: 1100px;
      margin: auto;
    }
    .service-card {
      background: #fff;
      border-radius: 12px;
      padding: 24px;
      box-shadow: 0 4px 12px rgba(0,0,0,.08);
      transition: all .3s ease;
    }
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 18px rgba(0,0,0,.12);
    }
    .service-card h3 {
      margin-bottom: 10px;
      color: #007bff;
    }
    .service-card p {
      font-size: 0.95rem;
      color: #444;
      line-height: 1.5;
    }

    /* Gallery */
    :root {
      --gallery-max: 1200px;
      --gap: 14px;
      --radius: 12px;
      --shadow: 0 4px 12px rgba(0,0,0,.08);
      --hover-shadow: 0 8px 18px rgba(0,0,0,.12);
    }
    .gallery {
      padding: clamp(24px, 4vw, 48px) 16px;
      background: #fafafa;
    }
    .gallery-inner { margin: 0 auto; max-width: var(--gallery-max); }
    .gallery-header { margin-bottom: 24px; text-align: center; }
    .gallery-header h2 {
      margin: 0 0 6px;
      font-size: clamp(1.5rem, 2.5vw, 2rem);
      font-weight: 700;
    }
    .gallery-header p { margin: 0; color: #666; }
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: var(--gap);
    }
    .gallery-item {
      aspect-ratio: 1 / 1;
      overflow: hidden;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      transition: transform .25s ease, box-shadow .25s ease;
      background: #eaeaea;
    }
    .gallery-item:hover {
      transform: translateY(-3px);
      box-shadow: var(--hover-shadow);
    }
    .gallery-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform .35s ease;
    }
    .gallery-item:hover .gallery-img { transform: scale(1.05); }
  </style>
</head>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
      <h1>Smart CCTV & Surveillance Services</h1>
    </div>
  </section>

  <!-- CCTV Services Section -->
  <section class="services-section">
    <h2>Our CCTV Services</h2>
    <p class="lead">We provide advanced surveillance solutions that ensure maximum security for your home, business, or industrial site.</p>

    <div class="service-grid">
      <div class="service-card">
        <h3>Home CCTV Setup</h3>
        <p>Protect your family with high-definition indoor and outdoor cameras, viewable from your phone anytime.</p>
      </div>
      <div class="service-card">
        <h3>Office & Business Surveillance</h3>
        <p>Monitor employees, visitors, and property with professional-grade CCTV systems tailored to your space.</p>
      </div>
      <div class="service-card">
        <h3>Industrial & Warehouse Security</h3>
        <p>24/7 monitoring systems for factories, warehouses, and sensitive environments with backup storage.</p>
      </div>
      <div class="service-card">
        <h3>Maintenance & Upgrades</h3>
        <p>Regular checks, repairs, and upgrades to keep your CCTV system working efficiently and securely.</p>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery">
    <div class="gallery-inner">
      <header class="gallery-header">
        <h2>Recent CCTV Installations</h2>
        <p>Check out some of our latest surveillance system setups.</p>
      </header>

      
<div class="gallery-grid">
<!-- Replace src with real images -->
<figure class="gallery-item">
<img src="{{ asset('images/fixing-solar.webp') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/fixing-solar2.jpg') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/benjamin-jopen-2SfssudtyIA-unsplash.jpg') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/Solar-Installation-Famous-Solar-2-768x576.jpg')}}"  loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/Famous-Solar-Company-in-Ibadan-Nigeria.jpg') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/fixing-solar.webp') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/fixing-solar2.jpg') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/benjamin-jopen-2SfssudtyIA-unsplash.jpg') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/fixing-solar.webp') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>

<figure class="gallery-item">
<img src="{{ asset('images/fixing-solar2.jpg') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/benjamin-jopen-2SfssudtyIA-unsplash.jpg') }}" alt="Solar Installation" loading="lazy" class="gallery-img">
</figure>


<figure class="gallery-item">
<img src="{{ asset('images/Solar-Installation-Famous-Solar-2-768x576.jpg')}}"  loading="lazy" class="gallery-img">
</figure>
</div>
</div>
</section>

  <script>
    let menubtn = document.getElementById("nav-icon");
    let closebtn = document.getElementById("nav-icon2");
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