@extends('adminlte::page')

@section('content')

<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">Ajout d' une section du caroussel</h1>
    
    <form action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="logocarou">image de logo:</label>
            <input type="file" id="logocarou" name="logocarou" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="img">image de fond:</label>
            <input type="file" id="img" name="img" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Ajouter</button>
    </form>

</div>


@endsection