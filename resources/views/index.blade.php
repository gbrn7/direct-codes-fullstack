<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
    <!-- Link Css Bootstrap -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/bootstrap-5.2/css/bootstrap.min.css') }}">

    <!-- Link BoxIcon -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/boxicons-master/css/boxicons.min.css') }}">
  
    <!-- Link Remixicon -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/RemixIcon-master/fonts/remixicon.css') }}">
  
    <!-- Link Aos -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/aos-2/dist/aos.css') }}">

    <!-- Css Main -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Style/IndexStyle/main.css') }}">
</head>
<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid py-5 navbar-wrapper align-items-center justify-content-center">
        <div class="col-lg-10 text-center text-lg-start d-flex justify-content-between align-items-center p-3">
          <a href="{{ route('index')}}" class="navbar-brand">
            <img src="{{ asset('directCodes/assets/img/Directcodes..svg') }}" class="logo">
          </a>
          <div class="collapse navbar-collapse toggle justify-content-center">
            <ul class="navbar-nav d-flex align-items-center gap-3 justify-content-center">
              <li class="nav-item"><a href="{{ route('member.pricing')}}">Pricing</a></li>
              <li class="nav-item"><a href="#">Service</a></li>
              <li class="nav-item"><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="btn-wrapper">
            <a href="{{ route('member.login') }}">
              <div>Sign In</div>
            </a>
          </div>
      </div>
    </div>
  </nav>

  <!-- Content Start -->
  <section class="content d-flex justify-content-center align-items-center">
    <div class="container-fluid content-wrapper">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-5 text-lg-start txt-content d-flex flex-column gap-2">
          <div class="head-wrapper">
            <p>Your Career Journey Starts From Here</p>
          </div>
          <div class="col-10">
            <div class="desc">
              <p>Learn To Code With Expert Mentors And A Good Community</p>
            </div>
            <div class="button">
              <button class="btn-cta"><a class="text-decoration-none" href="{{ route('member.register') }}">GET STARTED</a></button>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <img src="{{ asset('directCodes/assets/img/HeroImage-Index.svg') }}" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
</body>
</html>