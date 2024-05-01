<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('index');
    }
    public function news()
    {
        return view('news');
    }
    public function billtemp()
    {
        return view('bill-temp');
    }
    public function login()
    {
        return view('login');
    }
    
}
