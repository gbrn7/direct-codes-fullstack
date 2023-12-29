@extends('admin.layouts.base')

@section('title', 'Videos')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Videos</h3>
        </div>
        
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 mb-2">
              <a href="{{route('admin.video.create')}}" class="btn btn-warning">Create Videos</a>
            </div>
          </div>

          @if (session()->has('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <div class="row">
            <div class="col-md-12">
              <table id="video" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Categories</th>
                    <th>Mentor</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($videos as $video)          
                  <tr>
                    <td>{{ $video->id }}</td>
                    <td>{{ $video->title }}</td>
                    <td>
                      <img src="{{asset('storage/thumbnail/'.$video->thumbnail)}}" width="30%">
                    </td>
                    <td>{{ $video->categories }}</td>
                    <td>{{ $video->mentor }}</td>
                    <td class="d-lg-flex justify-content-between">
                      <a href="{{ route('admin.video.edit',  $video->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                      <a >
                        <form action="{{ route('admin.video.destroy', $video->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i>
                          </button>
                        </form>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
  <script>
    $('#video').DataTable();
  </script>
@endsection