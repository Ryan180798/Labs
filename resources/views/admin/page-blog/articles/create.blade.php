@extends('adminlte::page')

@section('content')

<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">Ajout d' une section d'un article</h1>
    
    <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="date">date:</label>
            <textarea type="text" name="date" id="date" class="form-control" cols="30" rows="10"></textarea>
        </div>
        
        <div class="form-group">
            <label for="img">image:</label>
            <input type="file" id="img" name="img" class="form-control">
        </div>

        <div class="form-group">
            <label for="titre">titre:</label>
            <textarea type="text" name="titre" id="titre" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="nom">nom:</label>
            <textarea type="text" name="nom" id="nom" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="fonction">fonction:</label>
            <textarea type="text" name="fonction" id="fonction" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Ajouter</button>
    </form>

</div>


@endsection