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
                <li class="breadcrumb-item active">Section Services</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Section Services</h3>
    
                    <a href="{{route('service.create')}}">
                        <button class="btn btn-success d-block mx-auto ">Add</button>
                    </a>
                    <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">Icone</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td><i class="{{$service->icone}}"></i></td>
                            <td>{{$service->titre}}</td>
                            <td>{{$service->para}}</td>
                            <td class="d-flex">
                                <a href="{{route('service.edit',$service->id)}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('service.destroy',$service->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
    
@endsection