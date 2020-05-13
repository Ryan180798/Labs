@extends('layout.app')

@section('content')


<div class="container mt-5">
    <h1 class="text-center">Vidéo</h1>
    <div class="content-header mt-5">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Vidéo</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



    <table class='table mt-5 pt-5'>
        <thead>
            <tr>
                <th scope="col">URL</th>
            </tr>
        </thead>

   
        <form action="{{route('video.update',$video->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 form-group">
                <label for="url">Enter Url here:</label>
                <input name="url" type='text' id="url" placeholder="https://example.com" class="form-control" value="{{$video->url}}"></>
                </div>  
        </div>
    
        <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>
    
    </form>
    </table>
</div>
{{-- {{!empty($vidéo) ?$vidéo->vid : ''}} --}}

@endsection