@extends('admin.layouts.base')

@section('title', 'Videos')

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
        <h3 class="card-title">Edit Video</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form enctype="multipart/form-data" method="POST" action="{{ route('admin.video.update', $video->id) }}">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}" placeholder="Make Travel React Web Apps">
          </div>
          <div class="form-group">
            <label for="trailer">Trailer</label>
            <input type="text" class="form-control" id="trailer" name="trailer" value="{{ $video->trailer }}" placeholder="Trailer url">
          </div>
          <div class="form-group">
            <label for="video">Videos</label>
            <input type="text" class="form-control" id="video" name="video" value="{{ $video->videos }}" placeholder="Video url">
          </div>
          <div class="form-group">
            <label for="number_of_parts">number_of_parts</label>
            <input type="text" class="form-control" id="number_of_parts" name="number_of_parts" value="{{  $video->number_of_parts }}" placeholder="5">
          </div>
          <div class="form-group">
            <label>Date </label>
            <div class="input-group date" id="release-date" data-target-input="nearest">
              <input type="text" name="release_date" value="{{ $video->release_date }}" class="form-control datetimepicker-input" data-target="#release-date"/>
              <div class="input-group-append" data-target="#release-date" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="mentor">Mentor</label>
            <input type="text" class="form-control" id="mentor" name="mentor" value="{{ $video->mentor }}" placeholder="Jackie Chan">
          </div>
          <div class="form-group">
            <label for="categories">Categories</label>
            <input type="text" class="form-control" id="categories" name="categories" value="{{ $video->categories }}" placeholder="Action, Fantasy">
          </div>
          <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail">
          </div>
          <div class="form-group">
            <label for="about">About</label>
            <input type="text" class="form-control" id="about" name="about" value="{{ $video->about}}" placeholder="Awesome Video">
          </div>
          <div class="form-group">
            <label>Featured</label>
            <select class="custom-select" name="featured" id="featured">
              <option value="0" {{ $video -> featured == '0' ? "selected" : ""}}>No</option>
              <option value="1" {{ $video->featured == '1' ? "selected" : ""}}>Yes</option>
            </select>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('js')
  <script>
    $('#release-date').datetimepicker ({
      format: 'YYYY-MM-DD'
    }); 
  </script>
@endsection