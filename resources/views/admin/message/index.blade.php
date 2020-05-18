@extends('adminlte::page')

@section('content')

    {{-- @include('templates.navbar') --}}

    <div class="container">
        <h1 class="text-center">Edit Contact</h1>
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Section Contact</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>



        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">email</th>
                    <th scope="col">sujet</th>
                    <th scope="col">message</th>

                </tr>
            </thead>
            <tbody>
                
            @foreach ($messages as $message)
                @csrf
            
                <tr>
                    <td>{{$message->nom}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->sujet}}</td>
                    <td>{{$message->message}}</td> 
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    
@endsection