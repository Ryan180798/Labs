@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center ">Section Ready</h1>  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Ready</a></li>
                <li class="breadcrumb-item active">Section Ready</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <table class='table mt-5 pt-5'>
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">button</th>
            </tr>
        </thead>
    </tbody>
    </table>


    <form action="{{route('ready.update')}}" method="POST">
      @csrf
  
      <div class="row">
          <div class="col-3 form-group">
              <label for="titreReady">titre:</label>
              <textarea name="titreReady" id="titreReady" cols="30" rows="5" class="form-control">{{!empty($ready) ?$ready->titreReady : ''}}</textarea>
              </div>
  
          <div class="col-3 form-group mx-5">
            <label for="sousTitreReady">sous-titre:</label>
            <textarea name="sousTitreReady" id="sousTitreReady" cols="30" rows="5" class="form-control">{{!empty($ready) ?$ready->sousTitreReady : ''}}</textarea>
            
              </div>

          <div class="col-3 form-group mx-1">
            <label for="buttonReady">button:</label>
            <textarea name="buttonReady" id="buttonReady" cols="30" rows="5" class="form-control">{{!empty($ready) ?$ready->buttonReady : ''}}</textarea>
            
              </div>
      </div>
  
      <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>
  
  </form>
</div>

@endsection