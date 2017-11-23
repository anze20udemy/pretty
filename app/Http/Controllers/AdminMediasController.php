<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\Thumbnail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AdminMediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $photos = Photo::all()->sortBy(['category_id']);
        $categories = Category::all();

        return view('admin.media.index', compact('photos', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $file = $request->file('file');

        $path = base_path(). '/photos/';

        $image_name = $file->getClientOriginalName();
        $thumb = $path . '/thumbs/'. $image_name;

        $image = Image::make($file);
       $path = base_path(). '/photos/';

        $image->save($path.$file->getClientOriginalName());
        $file->move('photos' , $image_name);

        $image->resize(150,150);
        $image->save($path . '/thumbs/'. $file->getClientOriginalName() );

        Photo::create(['file'=>$image_name, 'thumb'=>$image_name]);

        return redirect()->route('admin.media.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::findOrFail($id);
        $categories = Category::pluck('name', 'id')->all();


        return view('admin.media.edit', compact('photo', 'categories'));
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
        $photo = Photo::findOrFail($id);

        $photo->update($request->all());

        return redirect('/admin/media');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        unlink(base_path() . $photo->file);

        $photo->delete();

        return redirect('/admin/media');
    }

    public function photos()
    {
        $categories = Category::all();
        $category = $categories[5];

        $photos = Photo::all();





        return view('slike', compact('category', 'photos'));
    }



}
