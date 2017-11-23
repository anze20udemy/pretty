<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth:admin'); //samo admin Guard
//    }

    public function index()
    {

        $user_count = User::count();
        $photo_count = Photo::count();
        $comment_count = Comment::count();



        return view('admin.index', compact('user_count', 'photo_count', 'comment_count'));
    }
}
