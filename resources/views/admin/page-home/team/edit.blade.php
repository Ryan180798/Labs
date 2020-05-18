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
            <li class="breadcrumb-item active">Edit Team</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<div class="container">
    <h1 class="text-center ">Ajout de la Team</h1>
    
    <form action="{{route('team.update', $team->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="titre">titre</label>
            <input type="text" id="titre" name="titre" class="form-control" value="{{$team->titre}}">
        </div>

        <div class="form-group">
            <label for="nom">nom de la team:</label>
            <input type="text" id="nom" name="nom" class="form-control" value="{{$team->nom}}">
        </div>
        
        <div class="form-group">
            <label for="img">image:</label>
            <input type="file" id="img" name="img" class="form-control" value="{{$team->img_path}}">
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"  value="">{{$team->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Ajouter</button>
    </form>

</div>


@endsection