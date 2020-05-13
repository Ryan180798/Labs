@extends('adminlte::page')

@section('content')


<div class="container pt-5">
    <h1 class="text-center mt-5 pt-5">Testimonial</h1>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Add Temoignage</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="temoignage">témoignage:</label>
            <input type="text" id="temoignage" name="temoignage" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Ajouter</button>
    </form>

</div>


@endsection