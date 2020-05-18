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
                <li class="breadcrumb-item"><a href="/admin">Article</a></li>
                <li class="breadcrumb-item active">Section Articles</li>
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
                    <h3 class="card-title">Section Articles</h3>
    
                    <a href="{{route('article.create')}}">
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
                            <th scope="col">date</th>
                            <th scope="col">image</th>
                            <th scope="col">titre</th>
                            <th scope="col">nom</th>
                            <th scope="col">fonction</th>
                            <th scope="col">description</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{$article->date}}</td>
                            <td class="w-25">{{asset('storage/'.$article->img)}}</td>
                            <td>{{$article->titre}}</td>
                            <td>{{$article->nom}}</td>
                            <td>{{$article->fonction}}</td>
                            <td>{{$article->description}}</td>
                            <td class="d-flex">
                                <a href="{{route('article.edit',$article->id)}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('article.destroy',$article->id)}}" method="post" enctype="multipart/form-data">
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