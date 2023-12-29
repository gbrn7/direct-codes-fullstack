<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment-Finish</title>

    <!-- Link Css Bootstrap -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/bootstrap-5.2/css/bootstrap.min.css') }}">

    <!-- Link BoxIcon -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/boxicons-master/css/boxicons.min.css') }}">
  
    <!-- Link Remixicon -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/RemixIcon-master/fonts/remixicon.css') }}">
  
    <!-- Link Aos -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/aos-2/dist/aos.css') }}">

    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Style/PaymentFinishStyle/main.css') }}">

</head>
<body>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid py-5 navbar-wrapper align-items-center justify-content-center">
        <div class="col-lg-10 text-center text-lg-start d-flex justify-content-between align-items-center p-3">
          <a href="{{ route('index') }}" class="navbar-brand">
            <img src="{{ asset('directCodes/Assets/img/Directcodes..svg') }}" class="logo">
          </a>
          <div class="collapse navbar-collapse toggle justify-content-end">
            <ul class="navbar-nav d-flex align-items-center gap-3 justify-content-center">
              <li class="nav-item"><a href="#">Pricing</a></li>
              <li class="nav-item"><a href="#">Service</a></li>
              <li class="nav-item"><a href="#">Contact</a></li>
            </ul>
          </div>
      </div>
    </div>
  </nav>

  <!-- Content Start -->
  <div class="content d-flex justify-content-center align-items-lg-center">
    <div class="container-fluid content-wrapper">
      <div class="row r-1 justify-content-center align-items-center">
        <div class="col-lg-3 header justify-content-center align-items-center gap-3 d-flex flex-column ">
          <div class="title">
            <p class="m-0">Payment-Finish</p>
            <img class="line" src="{{ asset('directCodes/Assets/img/Line-payment-Finish.svg') }}">
          </div>
          <div class="desc mt-lg-3"><p class="m-0">Time to Start your Career Journey</p></div>
          <div class="btn-get-started">
            <a href="#" class="text-decoration-none"><button class="button d-flex justify-content-center align-items-center " type="submit">
              <span class="button-content">Get Started</span>
            </button></a>
          </div>
        </div>
      </div>
      <div class="row r-2 justify-content-center align-items-center">
        <div class="col-lg-6 hero-image  d-flex align-items-center justify-content-center">
          <img src="{{ asset('directCodes/Assets/img/Hero-Image-Payment-Finish.svg') }}" class="img-fluid">
        </div>
    </div>
  </div>
</body>
</html>