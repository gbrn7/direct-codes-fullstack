<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pricing</title>

    <!-- Link Css Bootstrap -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/bootstrap-5.2/css/bootstrap.min.css') }}">

    <!-- Link BoxIcon -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/boxicons-master/css/boxicons.min.css') }}">
  
    <!-- Link Remixicon -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/RemixIcon-master/fonts/remixicon.css') }}">
  
    <!-- Link Aos -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Vendor/aos-2/dist/aos.css') }}">

    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('directCodes/Assets/Style/PricingStyle/main.css') }}">

</head>
<body>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid py-5 navbar-wrapper align-items-center justify-content-center">
        <div class="col-lg-10 text-center text-lg-start d-flex justify-content-between align-items-center p-3">
          <a href="{{ route('index')}}" class="navbar-brand">
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
  <div class="content d-flex justify-content-center align-items-center">
    <div class="container-fluid content-wrapper">
      <div class="row r-1 justify-content-center align-items-center">
        <div class="col-lg-4 header text-center">
          <div class="title">
            <p class="m-0">Ready to Get Started?</p>
            <img class="line" src="{{ asset('directCodes/Assets/img/Line-Pricing.svg') }}">
          </div>
          <div class="desc mt-lg-3"><p class="m-0">choose a plan tailored to your need</p></div>
        </div>
      </div>
      <div class="row r-2 justify-content-center align-items-center">
        <div class="col-lg-9 pricing  d-flex align-items-center justify-content-center gap-4">
          <div class="col-lg-3 price-wrap price-1 bg-light">
            <div class="head text-center">
              <p class="title">{{ $basic->name }}</p>
              <p class="price">Rp.{{ $basic->price }}<span>/{{$basic->max_days}} Day</span></p>
            </div>
            <div class="benefit-wrapper">
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">{{$basic->max_users}} User</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Up to 40 Course Videos</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Source Code</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Discussion Group</p></div>
            </div>
            <div class="btn-subs text-center  d-flex justify-content-center align-items-center">
              <form action="{{ route('member.transaction.store') }}" method="post">
                @csrf
                <input type="hidden" name="package_id" value="{{$basic->id}}">
                <input type="hidden" name="">
                <button class="button  d-flex justify-content-center align-items-center" type="submit">
                  <span class="button-content">Subcribe Now</span>
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-3 price-wrap price-2 bg-light">
            <div class="head text-center">
              <p class="title">{{$pro->name}}</p>
              <p class="price">Rp.{{ $pro->price }}<span>/{{$pro->max_days}} Day</span></p>
            </div>
            <div class="benefit-wrapper ">
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">{{$pro->max_users}} User</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Up to 70 Course Videos</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Source Code</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Discussion Group</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Free Consultation</p></div>
            </div>
            <div class="btn-subs text-center  d-flex justify-content-center align-items-center">
              <form action="{{route('member.transaction.store') }}" method="post">
                @csrf
                <input type="hidden" name="package_id" value="{{$pro->id}}">
                <button class="button  d-flex justify-content-center align-items-center" type="submit">
                  <span class="button-content">Subcribe Now</span>
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-3 price-wrap price-3 bg-light ">
            <div class="head text-center">
              <p class="title">{{$ultimate->name}}</p>
              <p class="price">Rp.{{$ultimate->price}}<span>/{{$ultimate->max_days}} Days</span></p>
            </div>
            <div class="benefit-wrapper ">
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">{{$ultimate->max_users}} User</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Up to 40 Course Videos</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Source Code</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Discussion Group</p></div>
              <div class="benefit-wrap d-flex align-items-center justify-content-start gap-1"><i class='bx bxs-check-circle'></i> <p class="m-0">Free Consultation</p></div>   
            </div>
            <div class="btn-subs text-center d-flex justify-content-center align-items-center">
              <form action="{{route('member.transaction.store')}}" method="post" >
                @csrf
                <input type="hidden" name="package_id" value="{{$ultimate->id}}">
                <button class="button d-flex justify-content-center align-items-center" type="submit">
                  <span class="button-content">Subcribe Now</span>
                </button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>