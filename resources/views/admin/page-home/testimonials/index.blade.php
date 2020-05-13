@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center">Testimonials</h1>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Testimonial</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    @if (count($testimonials)<6)
        <a href="{{route('testimonial.create')}}">Ajout</a>
    @endif
    

    <table class='table'>
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Témoignage</th>
            </tr>
        </thead>

        @foreach ($testimonials as $testimonial)
            <tbody>
                <td>{{$testimonial->titre}}</td>
                <td>{{$testimonial->temoignage}}</td>
                <td>
                    <a href="{{route('testimonial.edit',$testimonial->id)}}">
                        <button class="btn btn-primary">Modifier</button>
                        </a>
                    <form action="{{route('testimonial.destroy',$testimonial->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
        
        @endforeach
    </tbody>
    </table>
</div>



@endsection