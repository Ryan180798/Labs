@extends('layout.app')

@section('content')


<div class="container mt-5">
    <h1 class="text-center">Menu</h1>
    <div class="content-header mt-5">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Menu</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



    <table class='table mt-5 pt-5'>
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">1er lien</th>
                <th scope="col">2ème lien</th>
                <th scope="col">3ème lien</th>
                <th scope="col">4ème lien</th>  
            </tr>
        </thead>
    </tbody>
    </table>


    <form action="{{route('menu.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
  
      <div class="row">
          <div class="col-2 form-group">
              <label for="logo">logo</label>
              <input name="logo" type='file' id="logo" cols="30" rows="10" class="form-control">{{!empty($menu) ?$menu->logo : ''}}</>
              </div>
  
          <div class="col-2 form-group">
              <label for="lien1">lien1</label>
              <textarea name="lien1" id="lien1" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien1 : ''}}</textarea>
              </div>

          <div class="col-2 form-group">
              <label for="lien2">lien2</label>
              <textarea name="lien2" id="lien2" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien2 : ''}}</textarea>
              </div>

          <div class="col-2 form-group">
            <label for="lien3">lien3</label>
            <textarea name="lien3" id="lien3" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien3 : ''}}</textarea>
            </div>    

        <div class="col-2 form-group">
          <label for="lien4">lien4</label>
          <textarea name="lien4" id="lien4" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien4 : ''}}</textarea>
          </div>    
      </div>
  
      <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>
  
  </form>
</div>


@endsection