<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_table;
class postController extends Controller
{
    

  
    
public function index(){

$data=create_table::all();

   return view("index",compact("data"))->with(["data"=>$data]);
}
public function store(Request $request){

    $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
    ]);
      $post=new create_table();
       $post->title=$request->title;
       $post->description=$request->description;
       $res=$post->save();

       return redirect("index")->with("success","store success");   
 
}

public function edit($id){
 
  $post=create_table::find($id);

  return view("edit")->with(["post"=>$post]);   
}

public function update(Request $request,$id){
    $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
    ]);
    $post=create_table::where("id",$id);
    $post->update([
      "title"=>$request->title,
      "description"=>$request->description
    ]);
    


    return redirect("index")->with("success","update success");   
  }


  public function delete($id){
    $post=create_table::where("id",$id)->first();

    $post->delete();
    return redirect("index");
   
  }
  public function create(){
  
     return view("create");   
  }














}