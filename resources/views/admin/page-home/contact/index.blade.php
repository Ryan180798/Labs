@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center ">Section Contact</h1>  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section About</li>
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
                <th scope="col">info 1</th>
                <th scope="col">info 2</th>
                <th scope="col">info 3</th>
                <th scope="col">button</th>   
            </tr>
        </thead>
    </tbody>
    </table>


    <form action="{{route('contact.update')}}" method="POST">
      @csrf
  
      <div class="row">
          <div class="col-2 form-group">
              <label for="titre_contact">titre</label>
              <textarea name="titre_contact" id="titre_contact" cols="30" rows="5" class="form-control">{{!empty($contact) ?$contact->titre_contact : ''}}</textarea>
              </div>
  
          <div class="col-2 form-group">
              <label for="sous_titre_contact">sous-titre</label>
              <textarea name="sous_titre_contact" id="sous_titre_contact" cols="30" rows="5" class="form-control">{{!empty($contact)?$contact->sous_titre_contact : ''}}</textarea>
              </div>

          <div class="col-2 form-group">
              <label for="info1_contact">info 1</label>
              <textarea name="info1_contact" id="info1_contact" cols="30" rows="5" class="form-control">{{!empty($contact)?$contact->info1_contact : ''}}</textarea>
              </div>

          <div class="col-2 form-group">
            <label for="info2_contact">info2</label>
            <textarea name="info2_contact" id="info2_contact" cols="30" rows="5" class="form-control">{{!empty($contact)?$contact->info2_contact : ''}}</textarea>
            </div>    

        <div class="col-2 form-group">
          <label for="info3_contact">info3</label>
          <textarea name="info3_contact" id="info3_contact" cols="30" rows="5" class="form-control">{{!empty($contact)?$contact->info3_contact : ''}}</textarea>
          </div>
          
          <div class="col-2 form-group">
            <label for="button_contact">button</label>
            <textarea name="button_contact" id="button_contact" cols="30" rows="5" class="form-control">{{!empty($contact)?$contact->button_contact : ''}}</textarea>
            </div>   
      </div>
  
      <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>
  
  </form>
</div>

@endsection