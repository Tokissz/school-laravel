<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.index');
    }
    
    
}
