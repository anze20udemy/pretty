<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('admin.comments.index', compact('comments'));
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
        $this->validate($request, [
//            'author' => 'required',
//            'email' => 'required|email',
            'body' => 'required',
//            'g-recaptcha-response' => 'required'
        ]);

        $data = [

            'user'    =>Auth::user()->name,
            'body'      =>$request->body,
//            'avatar'      =>Auth::user()->avatar

        ];

        Comment::create($data);

        $request->session()->flash('comment_message', 'Your message has been sumbitted and is waiting moderation');

        return redirect('mnenja');

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
        Comment::findOrFail($id)->update($request->all());

        return redirect('/admin/comments');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function comments()
    {
        $comments = Comment::all()->where('is_active',1);

        return view('mnenja', compact('comments'));
    }



}
