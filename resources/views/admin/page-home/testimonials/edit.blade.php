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
            <li class="breadcrumb-item active">Edit Temoignage</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<div class="container">
    <h1 class="text-center ">Modification du témoignage</h1>
    
    <form action="{{route('testimonial.update', $testimonial->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="titre">titre:</label>
            <input type="text" id="titre" name="titre" class="form-control" value="{{$testimonial->titre}}">
        </div>

        <div class="form-group">
            <label for="temoignage">témoignage:</label>
            <textarea type="text" name="temoignage" id="temoignage" class="form-control" cols="30" rows="10"  value="">{{$testimonial->temoignage}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Ajouter</button>
    </form>

</div>


@endsection