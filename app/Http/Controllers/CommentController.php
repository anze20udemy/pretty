<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    // S to funkcijo urejam komentarje in ratinge na front-end strani
    public function index()
    {
        $comments = Comment::all()->where('is_active', 1);







        $numRating = Count($comments);
        $sumRating = $comments->sum('rating');


     $avgRating = ($sumRating / $numRating);

        $star1= $comments->where('rating', 1)->count();
        $star2= $comments->where('rating', 2)->count();
        $star3= $comments->where('rating', 3)->count();
        $star4= $comments->where('rating', 4)->count();
        $star5= $comments->where('rating', 5)->count();






        return view('mnenja', compact('comments', 'numRating', 'avgRating', 'sumRating',
            'star1','star2','star3','star4','star5'));
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
            'ocena' => 'required',
//            'g-recaptcha-response' => 'required'
        ]);

        $data = [

            'user_id'    =>Auth::user()->id,
            'body'      =>$request->body,
            'avatar'      =>Auth::user()->avatar,
            'rating' =>$request->ocena

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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function comments()
    {
        $comments = Comment::all()->where('is_active',1);

        $numRating = 1;
        $sumRating = $comments->sum('rating');

        $avgRating = ($sumRating / $numRating);





        return view('mnenja', compact('comments', 'numRating', 'avgRating', 'sumRating'));
    }



}
