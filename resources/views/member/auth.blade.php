<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- Link Css Bootstrap -->
  <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/bootstrap-5.2/css/bootstrap.min.css') }}">

  <!-- Link BoxIcon -->
  <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/boxicons-master/css/boxicons.min.css') }}">

  <!-- Link Remixicon -->
  <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/RemixIcon-master/fonts/remixicon.css') }}">

  <!-- Link Aos -->
  <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/aos-2/dist/aos.css') }}">

  <!-- Link Css Main -->
  <link rel="stylesheet" href="{{ asset('directCodes/assets/Style/SignInStyle/main.css') }}">
</head>
<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid py-5 navbar-wrapper align-items-center justify-content-center">
        <div class="col-lg-10 text-center text-lg-start d-flex">
          <a href="{{ route('index')}}" class="navbar-brand">
            <img src="{{ asset('directCodes/assets/img/Directcodes..svg') }}" class="logo">
          </a>
          <div class="collapse navbar-collapse toggle">
            <ul class="navbar-nav ms-auto d-flex align-items-center gap-3 justify-content-center">
              <li class="nav-item">Don't Have Any Account?</li>
              <li class="nav-item"><a href="{{ route('member.register') }}"><div class="box-signup bg-light p-2">Sign Up</div></a></li>
            </ul>
          </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Image -->
  <section class="hero">
  <div class="container-fluid hero-wrapper">
    <div class="row justify-content-center">
      <div class="col-lg-7 d-flex justify-content-center">
        <img src="{{ asset('directCodes/assets/img/Hero-Image.svg')}}" class="img-fluid">
      </div>
      <div class="col-lg-3 text-lg-start">
        <div class="container-fluid form-wrapper  ">
            <div class="ms-auto form-wrap border-4 p-5 col-12">
              <div class="row-1 row justify-content-end">
                <div class="col-lg-12 text-lg-start mb-3">
                  <div class="col-lg-12">
                    <p class="label-login">LOG IN</p>
                    @error('credentials')
                        <div class="text-danger p-0 m-0">{{ $message }}</div>
                      @enderror
                  </div>
                </div>
              </div>
              <div class="row-2 row justify-content-end">
                <div class="col-lg-12 text-lg-start input-wrapper">
                  <form action="{{ route('member.login.auth') }} " method="POST">
                  @csrf  
                  <div class="mb-4 col-lg-12  input-wrap">
                      <p class="mb-2">EMAIL ADDRESS</p>
                      <input type="email input"
                      name="email"
                      placeholder="Your email address" 
                      value="{{old('email')}}"
                      >
                      @error('email')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-lg-12  mb-4  password  input-wrap">
                      <p class="mb-2">PASSWORDS</p>
                      <input type="password" 
                      name="password"
                      placeholder="Your password" 
                      value="{{old('password')}}">
                      @error('password')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="btn-signUp col-lg-12 d-flex justify-content-center align-items-center">
                      <button class="button d-flex justify-content-center align-items-center " type="submit">
                        <span class="button-content">Sign Up</span>
                        <i class='bx bx-right-arrow-alt arrow'></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row-3 row justify-content-end">
                <div class="col-lg-12 text-center footer-wrapper">
                  <div class="col-lg-12 mb-2">
                    <p class="m-0 a">Forgot Password? <a href="#">Reset Passwords</a></p>
                  </div>
                  <div class="col-lg-12">
                    <p class="m-0 b">Dengan melanjutkan, Anda memahami dan menyetujui penggunaan Kami atas informasi yang Anda sampaikan sesuai dengan ketentuan kebijkan Privasi</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </section>

</body>
</html>