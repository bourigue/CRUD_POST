@extends('post.master')
@section('content')
<label>edite</label>
<form method="post" action="{{route("post.update",$post->id)}}">

    @csrf
    <table>
        <div class="form-floating mb-3">
            <input name="title" type="text" class="form-control" value="{{$post->title}}" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">title</label>
          </div>
          <div class="form-floating">
            <input name="description" type="text" value="{{$post->description}}" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">description</label>
          </div>
          <button class="btn btn-primary">update</button>
    </form>


@endsection