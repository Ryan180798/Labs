@extends('layout.app')

@section('content')
    

<div class="container mt-5">
    <h1 class="text-center">Carousel</h1>
    <div class="content-header mt-5">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Carousel</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <table class='table mt-5 pt-5'>
        <a class="mt-5 pt-5" href="{{route('carousel.create')}}">Ajout</a>
        <thead>
            <tr>
                <th scope="col">logo</th> 
                <th scope="col">Image</th>
                <th scope="col">Description</th>
            </tr>
        </thead>

        @foreach ($carousels as $carousel)
            <tbody>
                <td><img src="{{'storage/'.$carousel->logoc}}" class="w-50"/></td>
                <td><img src="{{'storage/'.$carousel->img_path}}" class="w-50"/></td>
                <td>{{$carousel->description}}></td>
                <td>
                    <a href="{{route('carousel.edit',$carousel->id)}}">
                        <button class="btn btn-primary">Modifier</button>
                    </a>

                        <form action="{{route('carousel.destroy',$carousel->id)}}" method="post">
                            @csrf
                            @method('delete')
                    <button class="btn btn-danger mt-2">Supprimer</button>
                </td>
        
        @endforeach
    </tbody>
    </table>
</div>



@endsection
