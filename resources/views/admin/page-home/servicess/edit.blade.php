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
                <li class="breadcrumb-item active">Edit Service</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <h1 class="text-center ">Edit a Service</h1>
        <form action="{{route('service.update',$service->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Service Icon</label>
                <div>
                    @if ($service->icone=='fa fa-desktop')
                        <input type="radio" name="icone" id="" value="fa fa-desktop" checked>
                    @else
                        <input type="radio" name="icone" id="" value="fa fa-desktop">
                    @endif
                        <i class="fa fa-desktop"> Web Development</i>
                </div>
                <div>
                    @if ($service->icon=='fas fa-chart-bar')
                        <input type="radio" name="icone" id="" value="fas fa-chart-bar" checked>
                    @else
                        <input type="radio" name="icone" id="" value="fas fa-chart-bar">
                    @endif
                        <i class="fas fa-chart-bar"> : Analytics</i>
                </div>
                <div>
                    @if ($service->icone=='fas fa-pencil-ruler')
                        <input type="radio" name="icone" id="" value="fas fa-pencil-ruler" checked>
                    @else
                        <input type="radio" name="icone" id="" value="fas fa-pencil-ruler">
                    @endif
                        <i class="fas fa-pencil-ruler"> : Web Design</i>
                </div>
                <div>
                    @if ($service->icone=='fas fa-mobile-alt')
                        <input type="radio" name="icone" id="" value="fas fa-mobile-alt" checked>
                    @else
                        <input type="radio" name="icone" id="" value="fas fa-mobile-alt">
                    @endif
                        <i class="fas fa-mobile-alt"> : Responsive/Mobile apps</i>
                </div>
                <div>
                    @if ($service->icone=='fas fa-wrench')
                        <input type="radio" name="icone" id="" value="fas fa-wrench" checked>
                    @else
                       <input type="radio" name="icone" id="" value="fas fa-wrench"> 
                    @endif
                        <i class="fas fa-wrench"> : Maintenance</i>
                </div>
                <div>
                    @if ($service->icone=='fas fa-camera')
                        <input type="radio" name="icone" id="" value="fas fa-camera" checked>
                    @else      
                        <input type="radio" name="icone" id="" value="fas fa-camera">
                    @endif
                        <i class="fas fa-camera"> : Photography</i>
                </div>
            </div>
            <div class="form-group">
                <label for="titre">Title</label>
                <input type="text" name="titre" id='titre' class="form-control" value="{{$service->titre}}">
            </div>
            <div class="form-group">
                <label for="para">Description</label>
                <textarea name="para" id="para" cols="30" rows="10">{{$service->para}}</textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">edit</button>
        </form>
       
    </div>
    
@endsection