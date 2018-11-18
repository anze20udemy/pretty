<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingsController extends Controller
{
    public function store(Request $request)
    {

        $input = [

            'item_id'   =>$request->item_id,
            'user_id'    =>Auth::user()->id,

            'rating'      =>$request->rating_id,

        ];




        Rating::create($input);

        $request->session()->flash('comment_message', 'Your message has been sumbitted and is waiting moderation');

        return redirect()->back();
    }
}
