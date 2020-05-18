@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center ">Section Footer</h1>  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Footer</a></li>
                <li class="breadcrumb-item active">Section Footer</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <table class='table mt-5 pt-5'>
        <thead>
            <tr>
                <th scope="col">Texte</th>
            </tr>
        </thead>
    </tbody>
    </table>


    <form action="{{route('footer.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
  
      <div class="row">
          <div class="col-3 form-group">
              <label for="texte">texte:</label>
              <textarea name="texte" id="" cols="30" rows="5" class="form-control">{{!empty($footer) ?$footer->texte : ''}}</textarea>
              </div>
      </div>
      

      <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>

  </form>
</div>

@endsection