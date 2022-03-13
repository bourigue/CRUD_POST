@extends('post.master')
@section('content')
<a href="{{route("post.create")}}"><button class="btn btn-primary">add product</button> </a><table class="table">
     <tr>
        <td>id</td> 
        <td>title</td>  
        <td>description</td>
        <td>action</td>  
     </tr>
   
     @foreach ($data as $item)  <tr>
     <td>{{$item->id}}</td> 
     <td>{{$item->title}}</td>  
     <td>{{$item->description}}</td>
     <td> 
         <div class="btn-group">
      <a  href="{{route("post.edit",$item->id)}}">
          <button type="submite" class="btn btn-success m-2">edite</button>
      </a>
      <form method="get" action="{{route("post.delete",$item->id)}}">
        <button type="submite" class="btn btn-danger m-2">delete</button>
    </form>
       </div>

     </td>
       </tr>
     @endforeach 
   
    </table>
@endsection