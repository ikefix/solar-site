@extends('layouts.app')

@section('title', 'Our Work | Famous Solar')
@section('description', 'Famous Solar - Reliable solar, inverter, and energy solutions for homes and businesses in River-state, Nigeria.')

@section('content')

    <style>
      .hero h1{
            text-align: center;
            margin-left: 23%;
            color: #fff;
            font-size: 44px;
        }

        .hero{
            clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);
            height: 69vh;
        }

        /* Services Section */
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
.gallery-inner {
margin: 0 auto;
max-width: var(--gallery-max);
}
.gallery-header {
margin-bottom: 24px;
text-align: center;
}
.gallery-header h2 {
margin: 0 0 6px;
font-size: clamp(1.5rem, 2.5vw, 2rem);
font-weight: 700;
}
.gallery-header p {
margin: 0;
color: #666;
}


.gallery-grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
gap: var(--gap);
}


.gallery-item {
aspect-ratio: 1 / 1; /* equal square */
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

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
        <h1>Safe & Standard Electrical Wiring</h1>
    </div>
  </section>

    <!-- Services Section -->
  <section class="services-section">
    <h2>Our Solar Services</h2>
    <p class="lead">We provide end-to-end solar solutions — design, supply, installation, and maintenance. Whether for your home or business, our systems are tailored for efficiency and reliability.</p>

    <div class="service-grid">
      <div class="service-card">
        <h3>Residential Solar</h3>
        <p>Custom rooftop systems with inverter & battery options to keep your home powered, day and night.</p>
      </div>
      <div class="service-card">
        <h3>Commercial Solutions</h3>
        <p>Large-scale solar setups for businesses, warehouses, and offices — save money and boost resilience.</p>
      </div>
      <div class="service-card">
        <h3>Solar Water Systems</h3>
        <p>Solar water heaters and borehole pumps for sustainable hot water and reliable water supply.</p>
      </div>
      <div class="service-card">
        <h3>Maintenance & Repairs</h3>
        <p>Panel cleaning, system checks, and fast response to ensure maximum performance and lifespan.</p>
      </div>
    </div>
  </section>

    <!-- Responsive 3x3 Equal-Sized Image Grid -->
<section class="gallery">
<div class="gallery-inner">
<header class="gallery-header">
<h2>Recent Work</h2>
<p>People fixing solar panels, installing CCTV cameras, and more.</p>
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