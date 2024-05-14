<?php

namespace App\Http\Controllers;

use App\Models\info;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::all();
        return view('backend.CRUDInfo.indexInfo',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.CRUDInfo.createInfo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $description = $request->description;
        $dom = new DOMDocument();
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $description);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/infoContent/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();
        
        Info::create([
            'infoTitle' => $request->title,
            'infoContent' => $description,
            'infoBy' => 'admin'
        ]);

        return redirect('/info');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id )
    {
        $infos = Info::find($id);
        return view('backend.CRUDInfo.detailInfo',compact('infos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id )
    {
        $infos = Info::find($id);
        return view('backend.CRUDInfo.detailInfo',compact('infos'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $description = $request->description;
        $dom = new DOMDocument();
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $description);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/infoContent/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();
        
        Info::create([
            'infoTitle' => $request->title,
            'infoContent' => $description,
            'infoBy' => 'admin'
        ]);

        return redirect('/info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $infos = Info::find($id);
        
        $dom= new DOMDocument();
        $dom->loadHTML($infos->infoContent,9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);
               
            }
        }

        $infos->delete();
        return redirect()->back();
    }
}
