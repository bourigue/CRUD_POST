@extends('post.master')
@section('content')
<div class="container">
<label class="card-title m-4">add product</label>
<form method="post" action="{{route("post.store")}}">

    @csrf
    <table>
        <div class="form-floating mb-3">
            <input name="title" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">title</label>
          </div>
          <div class="form-floating">
            <input name="description" type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">description</label>
          </div>
          <br><br>
          <button type="submite" class="btn btn-primary">ajeuter</button>
    </form>

</div>
@endsection