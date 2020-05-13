@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center ">Section Presentation</h1>  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Presentation</a></li>
                <li class="breadcrumb-item active">Section Presentation</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <table class='table mt-5 pt-5'>
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">texte</th>
                <th scope="col">button</th>
            </tr>
        </thead>
    </tbody>
    </table>


    <form action="{{route('presentation.update')}}" method="POST">
      @csrf
  
      <div class="row">
          <div class="col-3 form-group">
              <label for="titrePresentation">titre:</label>
              <textarea name="titreP" id="titrePresentation" cols="30" rows="5" class="form-control">{{!empty($presentation) ?$presentation->titrePresentation : ''}}</textarea>
              </div>
  
          <div class="col-3 form-group mx-5">
            <label for="textePresentation">texte:</label>
            <textarea name="texteP" id="textePresentation" cols="30" rows="5" class="form-control">{{!empty($presentation) ?$presentation->textePresentation : ''}}</textarea>
            
              </div>

          <div class="col-3 form-group mx-1">
            <label for="buttonPresentation">button:</label>
            <textarea name="buttonP" id="buttonPresentation" cols="30" rows="5" class="form-control">{{!empty($presentation) ?$presentation->buttonPresentation : ''}}</textarea>
            
              </div>
      </div>
  
      <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>
  
  </form>
</div>

@endsection