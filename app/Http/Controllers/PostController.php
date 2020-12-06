<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(Request $request){
        // $posts=DB::select('select * from posts');
        $posts=DB::table('posts');
        if($name = $request->name){
            $posts=$posts->where('name','like','%'.$name.'%');
        }
        if($content = $request->content){
            $posts=$posts->where('content','like','%'.$content.'%');
        }
        if($date = $request->date){
            $posts=$posts->whereDate('created_at',$date);
        }
        // dd($request->date);
        $posts =  $posts->get();
        // dd($posts);
        return view('post.index',compact('posts'));
    }
}
