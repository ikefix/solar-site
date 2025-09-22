<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Page Title (custom per page) -->
  <title>@yield('title', 'Famous Solar')</title>

  <!-- SEO Description (optional per page) -->
  <meta name="description" content="@yield('description', 'Reliable Solar and Energy Solutions by Famous Solar.')">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}"> <!-- for FontAwesome icons -->
</head>
<body>
  
  <!-- Navbar -->
  @include('partials.navbar')

  <!-- Main Page Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  @include('partials.footer')

  <!-- JavaScript -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
