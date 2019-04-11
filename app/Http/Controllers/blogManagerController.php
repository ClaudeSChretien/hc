<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Blog;

class blogManagerController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = blog::all();

        return view('blogsManager.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogsManager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titre'=>'required',
            'paragraphe'=>'required',
            'author'=>'required'
        ]);
        $cover = $request->file('photo');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('blog')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $blog = new blog([
            'filename' => $cover->getFilename().'.'.$extension,
            'original_filename' => $cover->getClientOriginalName(),
            'titre' => $request->get('titre'),
            'paragraphe' => $request->get('paragraphe'),
            'author' => $request->get('author'),
        ]);
        $blog->save();
        return redirect('/blogsManager')->with('success', 'blog saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //
        $blog = blog::find($id);
        return view('blogsManager.show', compact('blog'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = blog::find($id);
        return view('blogsManager.edit', compact('blog'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        //
        
        $request->validate([
            'titre'=>'required',
            'paragraphe'=>'required',
            'author'=>'required',
            'photo' => 'photo'
        ]);

        $cover = $request->file('photo');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('blog')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $blog = blog::find($id);
        $blog->titre =  $request->get('titre');
        $blog->paragraphe = $request->get('paragraphe');
        $blog->author = $request->get('author');
        $blog->filename = $cover->getFilename().'.'.$extension;
        $blog->original_filename = $cover->getClientOriginalName();
        $blog->save();

        return redirect('/blogsManager')->with('success', 'blog updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = blog::find($id);
        $blog->delete();

        return redirect('/blogsManager')->with('success', 'blog deleted!');
    }
}
