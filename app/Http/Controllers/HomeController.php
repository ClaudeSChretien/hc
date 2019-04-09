<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        $photos = Photo::all();

        return view('welcome', compact('photos'));
    }
}
