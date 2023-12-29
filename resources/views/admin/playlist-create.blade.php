@extends('admin.layouts.base');

@section('title', 'Playlist');

@section('content')
<div class="row">
  <div class="col-md-12">

    {{-- Alert Here --}}
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create Playlist</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form enctype="multipart/form-data" method="POST" action="{{ route('admin.video.playlist', $data) }}">
        @csrf 
        <div class="card-body py-0">
          <div class="form-group">
            <label for="video_id">Video id</label>
            <input disabled value = "{{ $id + 1 }}"  type="text" class="form-control" id="video_id" name="video_id" value="{{ old('video_id') }}" placeholder="5">
          </div>
        </div>
          <div class="form-group px-3">
            <label  for="title">Title</label>
            <input  value = "{{  $data['title'] }}"  type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Travel Web React Js">
          </div>

        @for ($i = 0; $i < $data['number_of_parts'] ; $i++)
        <div class="form-group px-3">
            <label for="title_{{ $i + 1}}">Title_{{ $i + 1 }}</label>
            <input type="text" class="form-control" 
            id="title_{{ $i + 1 }}" 
            name="title_{{ $i + 1}}" placeholder="Gege 1" 
            value="{{ old('title_$i + 1}') }}">
        </div>
        <div class="form-group px-3">
            <label for="link_{{ $i + 1 }}">Link_{{$i + 1}}</label>
            <input type="text" class="form-control" id="link_{{ $i }}" 
            name="link_{{ $i + 1}}" placeholder="youtube.com" 
            value="{{ old('link_$i + 1') }}">
        </div>
        @endfor
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection