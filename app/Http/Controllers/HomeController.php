<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Blog;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        $photos = Photo::all();
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();

        return view('welcome',compact('photos','blogs'));
    }
}
