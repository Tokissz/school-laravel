<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->orderBy('created_at','desc')->get();
        return view('backend.CRUDPost.indexPost',compact('posts'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.CRUDPost.createPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $description = $request->description;
        $dom = new DOMDocument();
        $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $description);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/postContent/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();
        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/imgCover/', $filename);
            
        }
        Post::create([
            'postTitle' => $request->title,
            'postContent' => $description,
            'postCover' => $filename,
            'postType' => $request->type,
            'postGroup' => $request->group,
            'postBy' => Auth::user()->name
            
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        if ($post->postType == 'activity') {
            $post->postType = 'กิจกรรมโรงเรียน';
        }elseif ($post->postType == 'activityStudent') {
            $post->postType = 'กิจกรรมนักเรียน';
        }elseif ($post->postType == 'activityTeacher') {
            $post->postType = 'กิจกรรมครู';
        }elseif ($post->postType == 'news') {
            $post->postType = 'ประชาสัมพันธ์';
        }

        return view('backend.CRUDPost.detailPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.CRUDPost.editPost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $description = $request->description;

        $dom = new DOMDocument();
        $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $description);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // Check if the image is a new one
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
              
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/upload/" . time(). $key.'.png';
                file_put_contents(public_path().$image_name,$data);
                
                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }

        }
        $description = $dom->saveHTML();

        
        if($request->hasfile('image'))
        {
            $destination = 'upload/imgCover/'.$post->postCover;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('upload/imgCover/', $filename);
            
        }else{
            $filename = $post->postCover;
        }

        $post->update([
            'postTitle' => $request->title,
            'postContent' => $description,
            'postCover' => $filename,
            'postType' => $request->type,
            'postGroup' => $request->group,
            'postBy' => Auth::user()->name
        ]);

        return redirect('show/post/'.$post->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        
        $dom= new DOMDocument();
        $dom->loadHTML($post->postContent,9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);
               
            }
        }

        $post->delete();
        return redirect()->back();

    }
}
