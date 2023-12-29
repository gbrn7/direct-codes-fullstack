@extends('member.layouts.base')

@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" href="{{ asset('directCodes/assets/Style/Dashboard.style/main.css') }}">
@endsection

@section('content')
<section class="content">
      <div class="container-fluid content-wrapper">
          <div class="col-lg-11 justify-content-end d-flex">
            <form action="" class="d-flex gap-2 mt-3">
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Programming Languages</option>
                <option value="1">Javascript</option>
                <option value="2">Phyton</option>
                <option value="3">Php</option>
              </select>
              <div class="input-group mt-3 mt-lg-0 m-lg-0">
                <input type="text" class="form-control input-field " placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button type="submit" class="input-group-text" id="basic-addon2"><i class='bx bx-search-alt-2'></i></button>
              </div> 

            </form>
          </div>

          <div class="col-lg-12 justify-content-end d-flex align-items-end mt-5">
            <div class="col-lg-10 content-wrap  d-flex">
              <div class="col-lg-12 videos d-flex flex-wrap">
                @foreach ($videos as $video)
                <div class="col-lg-3 video-wrapper d-flex flex-column justify-content-center align-items-center">
                  <div class="col-10 thumbnail">
                    <a href="{{ route('member.video.detail', $video->id) }}">
                      <img src="{{ asset('storage/thumbnail/'.$video->thumbnail) }}" class="img-fluid">
                    </a>
                  </div>
                  <div class="col-10 desc-wrapper">
                    <a href="{{ route('member.video.detail', $video->id) }}" class="text-decoration-none text-black">
                      <p class="title m-0">{{ $video->title }}</p>
                      <p class="duration m-0">{{ date('Y', strtotime($video->release_date)) }} - {{ $video->number_of_parts}} Part Video - {{$video->mentor}}</p>
                    </a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="col-lg-12 justify-content-end d-flex flex-column align-items-end gap-4 mt-5">
            <div class="col-lg-10 content-wrap">
              <div class="title">
                <p class="t-1 m-0">Full-stack Web Development</p>
                <p class="t-2 m-0">Recomendation from expert Mentor</p>
              </div>
              <div class="videos col-lg-12 d-flex mt-4">
                <div class="swiper mySwiper-1 p-3 p-sm-0">
                  <div class="swiper-wrapper  p-0 position-relative ">
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/1.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack Laraver React Js: Build Straming web </p>
                            <p class="duration m-0">45 Videos - 30 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/1.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack Laraver React Js: Build Straming web </p>
                            <p class="duration m-0">45 Videos - 30 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/1.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack Laraver React Js: Build Straming web </p>
                            <p class="duration m-0">45 Videos - 30 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/1.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack Laraver React Js: Build Straming web </p>
                            <p class="duration m-0">45 Videos - 30 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/1.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack Laraver React Js: Build Straming web </p>
                            <p class="duration m-0">45 Videos - 30 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/1.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack Laraver React Js: Build Straming web </p>
                            <p class="duration m-0">45 Videos - 30 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-10 content-wrap">
              <div class="title">
                <p class="t-1 m-0">Ios Development</p>
                <p class="t-2 m-0">Recomendation from expert Mentor</p>
              </div>
              <div class="videos col-lg-12 d-flex mt-4">

                <div class="swiper mySwiper-2 p-3 p-sm-0">
                  <div class="swiper-wrapper  p-0 position-relative ">
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/2.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Flutter : Build E-Commerce</p>
                            <p class="duration m-0">40 Videos - 25 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/2.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Flutter : Build E-Commerce</p>
                            <p class="duration m-0">40 Videos - 25 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/2.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Flutter : Build E-Commerce</p>
                            <p class="duration m-0">40 Videos - 25 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/2.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Flutter : Build E-Commerce</p>
                            <p class="duration m-0">40 Videos - 25 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/2.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Flutter : Build E-Commerce</p>
                            <p class="duration m-0">40 Videos - 25 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/2.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Flutter : Build E-Commerce</p>
                            <p class="duration m-0">40 Videos - 25 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-10 content-wrap">
              <div class="title">
                <p class="t-1 m-0">Android Development</p>
                <p class="t-2 m-0">Recomendation from expert Mentor</p>
              </div>
              <div class="videos col-lg-12 d-flex mt-4">

                <div class="swiper mySwiper-3 p-3 p-sm-0">
                  <div class="swiper-wrapper  p-0 position-relative ">
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/3.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Android Studio : Build Arcade Game</p>
                            <p class="duration m-0">50 Videos - 40 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/3.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Android Studio : Build Arcade Game</p>
                            <p class="duration m-0">50 Videos - 40 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/3.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Android Studio : Build Arcade Game</p>
                            <p class="duration m-0">50 Videos - 40 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/3.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Android Studio : Build Arcade Game</p>
                            <p class="duration m-0">50 Videos - 40 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/3.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Android Studio : Build Arcade Game</p>
                            <p class="duration m-0">50 Videos - 40 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-lg-12 video-wrapper d-flex flex-column justify-content-center align-items-center">
                        <div class="col-10 thumbnail">
                          <a href="#">
                            <img src="{{ asset('directCodes/assets/img/3.jpg') }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-10 desc-wrapper">
                          <a href="#" class="text-decoration-none text-bl">
                            <p class="title m-0">Build Fullstack  Android Studio : Build Arcade Game</p>
                            <p class="duration m-0">50 Videos - 40 Hours</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

@endsection