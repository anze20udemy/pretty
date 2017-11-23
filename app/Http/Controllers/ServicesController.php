<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storitve()
    {
        return view('storitve');
    }



    public function masaza()
    {
        $categories = Category::all();
        $category = $categories[2];

        $photos = Photo::all();


        return view('storitve.masaza',compact('category', 'photos'));
    }
    public function kodranje()
    {
        $categories = Category::all();
        $category = $categories[0];

        $photos = Photo::all();


        return view('storitve.kodranje',compact('category', 'photos'));
    }
    public function slavnostne()
    {
        $categories = Category::all();
        $category = $categories[3];

        $photos = Photo::all();


        return view('storitve.slavnostne',compact('category', 'photos'));
    }
    public function strizenje()
    {
        $categories = Category::all();
        $category = $categories[1];

        $photos = Photo::all();


        return view('storitve.strizenje',compact('category', 'photos'));
    }
    public function barvanje()
    {
        $categories = Category::all();
        $category = $categories[4];

        $photos = Photo::all();


        return view('storitve.barvanje',compact('category', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
