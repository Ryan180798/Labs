@extends('adminlte::page')

@section('content')


<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">Team</h1>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Add Team</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="titre">titre de la Team:</label>
            <input type="titre" id="titre" name="titre" class="form-control">
        </div>

        <div class="form-group">
            <label for="nom">nom de la Team:</label>
            <input type="nom" id="nom" name="nom" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="img_path">image:</label>
            <input type="file" id="img" name="img" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Ajouter</button>
    </form>

</div>


@endsection