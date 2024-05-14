<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
   
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        
        return view('index', compact('posts'));
    }
    public function activity()
    {
        $posts = Post::latest()->paginate(10);
        return view('activity', compact('posts'));
    }
    public function billtemp()
    {
        return view('bill-temp');
    }
    public function showPost($id)
    {
        $post = Post::find($id);
        return view('details',compact('post'));
    }
    
    
}
