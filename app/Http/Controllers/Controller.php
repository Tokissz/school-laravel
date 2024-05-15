<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
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
        $posts = Post::latest()->paginate(9);
        $searchType = '';
        return view('activity', compact('posts','searchType'));
    }
    public function billtemp()
    {
        return view('bill-temp');
    }
    public function showPost($id)
    {
        $post = Post::find($id);
        return view('details', compact('post'));
    }

    public function search(Request $request)
    {
        // return $request;
        $searchTerm = $request->input('search');
        $searchType = $request->type;

        if ($searchTerm && $searchType) {
            $posts = Post::where('postType', 'like', '%' . $searchType . '%')
                ->where(function ($query) use ($searchTerm) {
                    $query->where('postTitle', 'like', '%' . $searchTerm . '%')
                        ->orWhere('postContent', 'like', '%' . $searchTerm . '%');
                })
                ->latest()->paginate(9);
            return view('activity', compact('posts', 'searchType'));
        }

        if ($searchTerm) {
            $posts = Post::where('postTitle', 'like', '%' . $searchTerm . '%')
                ->orWhere('postContent', 'like', '%' . $searchTerm . '%')
                ->latest()->paginate(9);

            return view('activity', compact('posts', 'searchType'));
        }

        if ($searchType) {
            $posts = Post::where('postType', 'like', '%' . $searchType . '%')
                ->latest()->paginate(9);
            return view('activity', compact('posts', 'searchType'));
        } 
            
        $posts = Post::latest()->paginate(9);
        return redirect('activity', compact('posts'));
        
    }

    public function searchBy(Request $request)
    {
        // return $request;
        $searchType = $request->input('type');

        $posts = Post::where('postType', 'like', '%' . $searchType . '%')
            ->latest()->paginate(9);

        return view('activity', compact('posts'));
    }
}
