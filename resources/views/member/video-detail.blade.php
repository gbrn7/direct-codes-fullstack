@extends('member.layouts.base')

@section('title', 'Video-Detail')

@section('css')
<link rel="stylesheet" href="{{ asset('directCodes/assets/Style/videosDetailStyle/main.css') }}">
@endsection

@section('content')
<section class="content">
      <div class="container-fluid content-wrapper">
        <div class="row justify-content-end content-wrap mt-1">
            <div class="col-lg-10 ">
            <div class="row embed-wrap justify-content-center">
                <iframe class="embed " src="https://www.youtube.com/embed/Azfj1efPAH0" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-10 description-wrapper">
                  <div class="title">
                    <p class="m-0">Position absolute and responsive layouts
                    </p>
                  </div>
                  <div class="description">
                    <p class="fw-semibold fs-6 m-0 mt-2">{{ $data->title_part }}</p>
                    <p class="fw-semibold fs-6 m-0">2022 - Jhon LBF</p>
                  </div>
                </div>
                <div class="row justify-content-center playlist-wrapper">
                  @props(['i' => 1])
                  <!-- Abobe line make varible -->
                  @foreach ($videos as $video)
                      @if ($video->selected === 1)
                        <a href="{{ route('member.video.detail.playlist', [$video->video_id, $video->id, $i]) }}" class="d-flex text-decoration-none justify-content-center">
                          <div class="col-lg-10 playlist-wrap selected p-3 rounded-5">
                            <div class="row playlist">
                              <p class="m-0 text-center">{{ $video->title }} - Parts {{$i++}}</p>
                            </div>
                            </div>
                        </a>                 
                      @else
                        <a href="{{ route('member.video.detail.playlist', [$video->video_id, $video->id, $i]) }}" class="d-flex text-decoration-none justify-content-center">
                          <div class="col-lg-10 playlist-wrap p-3 rounded-5">
                            <div class="row playlist">
                              <p class="m-0 text-center">{{ $video->title }} - Parts {{$i++}}</p>
                            </div>
                            </div>
                        </a>
                      @endif
                  @endforeach
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
@endsection