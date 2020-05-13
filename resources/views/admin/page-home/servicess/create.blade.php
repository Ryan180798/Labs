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
                <li class="breadcrumb-item active">Add Service</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container pb-5">
        <h1 class="text-center">Add a Service</h1>
        <form action="{{route('service.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Service Icon</label>
                <div>
                    <input type="radio" name="icone" id="" value="fa fa-desktop" checked>
                    <i class="fa fa-desktop"> Web Development</i>
                </div>
                <div>
                    <input type="radio" name="icone" id="" value="fas fa-chart-bar">
                    <i class="fas fa-chart-bar"> : Analytics</i>
                </div>
                <div>
                    <input type="radio" name="icone" id="" value="fas fa-pencil-ruler">
                    <i class="fas fa-pencil-ruler"> : Web Design</i>
                </div>
                <div>
                    <input type="radio" name="icone" id="" value="fas fa-mobile-alt">
                    <i class="fas fa-mobile-alt"> : Responsive/Mobile apps</i>
                </div>
                <div>
                    <input type="radio" name="icone" id="" value="fas fa-wrench">
                    <i class="fas fa-wrench"> : Maintenance</i>
                </div>
                <div>
                    <input type="radio" name="icone" id="" value="fas fa-camera">
                    <i class="fas fa-camera"> : Photography</i>
                </div>
            </div>
            <div class="form-group">
                <label for="titre">Title</label>
                <input type="text" name="titre" id='titre' class="form-control">
            </div>
            <div class="form-group">
                <label for="para">Description</label>
                <textarea name="para" id="para" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">Add</button>
        </form>
       
    </div>
    
@endsection