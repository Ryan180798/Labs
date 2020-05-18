@extends('adminlte::page')

@section('content')


<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">Modfication d' une section caroussel</h1>
    
    <form action="{{route('carousel.update', $carousel->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="logocarou">image de logo:</label>
            <input type="file" id="logocarou" name="logocarou" class="form-control" value="{{$carousel->logoc}}">
        </div>
        
        <div class="form-group">
            <label for="img">image de fond:</label>
            <input type="file" id="img" name="img" class="form-control" value="{{$carousel->img_path}}">
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"  value="{{$carousel->description}}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Modifier</button>
    </form>

</div>


@endsection