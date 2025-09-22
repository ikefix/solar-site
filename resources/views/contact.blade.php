@extends('layouts.app')

@section('title', 'Contact Us | Famous Solar')
@section('description', 'Famous Solar - Reliable solar, inverter, and energy solutions for homes and businesses in River-state, Nigeria.')

@section('content')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <!-- Font Awesome (for icons, offline version optional) -->
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    <style>
        .hero h1{
            text-align: center;
            margin-left: 39%;
            color: #fff;
            font-size: 44px;
        }

        .hero{
            clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);
            height: 69vh;
        }

        .form{
            background: #fff;
        }

        .form h1{
            text-align: center;
            color: #647ba1;
            font-size: 40px;           
            margin-top: 40px     
        }

        .contain{
            margin-top: 10px;
            padding: 50px 80px;
        }

        /* Responsive for phones (max-width: 390px) */
@media screen and (max-width: 787px) {
        .hero h1{
            margin-left: 0% ;   
        }

        .contain {
            margin-top: 10px;
            padding: 20px 40px;
        }
        }
    </style>
    
 <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
        <h1>CONTACT US</h1>
    </div>
  </section>
  
<section class="form">

    <h1>GET IN TOUCH</h1>
  <div class="contain">
  <div class="form-side">
    <h2>Save Your Money,<br> Save Your Properties,<br> Save Environment!</h2>
    <p>If you have any questions or need help, feel free to<br>
      contact with our team, or you can call or chat us any<br>
      time.</p>

      <a href="#" class="quote-btn5"><i class="fas fa-comment-dots"></i>Chat With Us</a>
  </div>

  <div class="form-side2">
    <h1>WRITE US A MESSAGE</h1>
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

<script>
  // document.getElementById('menu-toggle').addEventListener('click', function () {
  //   window.alert("njsdndcnj");
  // });

      let menubtn = document.getElementById("nav-icon");
    let closebtn = document.getElementById("nav-icon2")
    let sidenav = document.getElementById("nav-links");

    menubtn.addEventListener("click", function(){
      sidenav.style.display = "flex";
      closebtn.style.display = "block";
    })

    closebtn.addEventListener("click", function(){
      sidenav.style.display = "none";
      closebtn.style.display = "none";
    })
    

</script>

@endsection