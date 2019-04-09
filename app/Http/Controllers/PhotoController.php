<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Photo;

class PhotoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photos = Photo::all();

        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('photos.create');
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
            'photographer'=>'required',
            'location'=>'required',
            'photo'=>'required',
            'location_url'=>'required' 
             
            
        ]);
        $cover = $request->file('photo');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('photo')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $photo = new Photo([
            'filename' => $cover->getFilename().'.'.$extension,
            'original_filename' => $cover->getClientOriginalName(),
            'photographer' => $request->get('photographer'),
            'location' => $request->get('location'),
            'location_url' => $request->get('location_url'),
        ]);
        $photo->save();
        return redirect('/photos')->with('success', 'photo saved!');
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
        $photo = Photo::find($id);
        return view('photos.edit', compact('photo'));  
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
            'photographer'=>'required',
            'location'=>'required',
            'photo'=>'required',
            'location_url'=>'required' 
        ]);

        $cover = $request->file('photo');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('photo')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $photo = Photo::find($id);
        $photo->photographer =  $request->get('photographer');
        $photo->location = $request->get('location');
        $photo->location_url = $request->get('location_url');
        $photo->filename = $cover->getFilename().'.'.$extension;
        $photo->original_filename = $cover->getClientOriginalName();
        $photo->save();

        return redirect('/photos')->with('success', 'Photo updated!');
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
        $photo = Photo::find($id);
        $photo->delete();

        return redirect('/photos')->with('success', 'Photo deleted!');
    }
}
