@extends('adminlte::page')

@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Edit Article</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <h1 class="text-center ">Edit a Article</h1>
        <form action="{{route('article.update',$article->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" id='date' class="form-control" value="{{$article->date}}">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" id='img' class="form-control" value="{{$article->img}}">
            </div>
            <div class="form-group">
                <label for="titre">Title</label>
                <input type="text" name="titre" id='titre' class="form-control" value="{{$article->titre}}">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id='nom' class="form-control" value="{{$article->nom}}">
            </div>
            <div class="form-group">
                <label for="fonction">Fonction</label>
                <input type="text" name="fonction" id='fonction' class="form-control" value="{{$article->fonction}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{$article->description}}</textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">edit</button>
        </form>
       
    </div>
    
@endsection