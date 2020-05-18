@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center ">Section Services Primés</h1>  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Services Primés</a></li>
                <li class="breadcrumb-item active">Section Services Primés</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <table class='table mt-5 pt-5'>
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">button</th>
            </tr>
        </thead>
    </tbody>
    </table>


    <form action="{{route('serviceprime.update')}}" method="POST">
      @csrf
  
      <div class="row">
          <div class="col-3 form-group">
              <label for="titre">titre:</label>
              <textarea name="titre" id="titre" cols="30" rows="5" class="form-control">{{!empty($serviceprime) ?$serviceprime->titre : ''}}</textarea>
              </div>

          <div class="col-3 form-group mx-5 pl-5">
            <label for="button">button:</label>
            <textarea name="button" id="button" cols="30" rows="5" class="form-control">{{!empty($serviceprime) ?$serviceprime->button : ''}}</textarea>
            
              </div>
      </div>
      
      
      <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>

  </form>
</div>

@endsection