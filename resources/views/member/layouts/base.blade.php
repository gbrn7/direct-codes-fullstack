<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DirectCodes | @yield('title')</title>

    <!-- Link Css Bootstrap -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/bootstrap-5.2/css/bootstrap.min.css') }}">

    <!-- Link BoxIcon -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/boxicons-master/css/boxicons.min.css') }}">
  
    <!-- Link Remixicon -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/RemixIcon-master/fonts/remixicon.css') }}">
  
    <!-- Link Aos -->
    <link rel="stylesheet" href="{{ asset('directCodes/assets/Vendor/aos-2/dist/aos.css') }}">
  
    <!-- Link Css Main -->
    @yield('css')


    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
    <!-- SideBar Start-->
  @include('member.layouts.sidebar')
    <!-- Sidebar End -->

    <!-- Header Start -->
  @include(('member.layouts.navbar'))
    <!-- Header End -->
    
    <!-- Content Start-->
    @yield('content')


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- JS -->
    <Script src="{{ asset('directCodes/assets/Js/script.js') }}"></Script>

    @yield('js')
</body>
</html>