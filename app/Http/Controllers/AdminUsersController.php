<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();



        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(trim ($request->password) == ''){          // Če je slučajno polje password prazno

            $input = $request->except('password'); //shrani vse razen passworda
        } else {

            $input = $request->all();
            $input['password'] = bcrypt($request->password) ;
        }



        if($file = $request->file('photo_id')) {    // če imamo datoteko s sliko,

            $name = time() . $file->getClientOriginalName();  // ji dodamo čas pred pravo ime slike

            $file->move('images', $name);                      // in sliko premaknemo v folder Images

            $photo = Photo::create(['file' =>$name ]);     // V tablelo photo shranimo kot ime

            $input['photo_id'] = $photo->id;
        }

        User::create($input);

        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.edit', compact('user', 'roles'));
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
        $user = User::findOrFail($id);

        if(trim ($request->password) == ''){          // Če je slučajno polje password prazno

            $input = $request->except('password'); //shrani vse razen passworda
        } else {

            $input = $request->all();
            $input['password'] = bcrypt($request->password) ;
        }



        if($file = $request->file('photo_id')) {    // če imamo datoteko s sliko,

            $name = time() . $file->getClientOriginalName();  // ji dodamo čas pred pravo ime slike

            $file->move('images', $name);                      // in sliko premaknemo v folder Images

            $photo = Photo::create(['file' =>$name ]);     // V tablelo photo shranimo kot ime

            $input['photo_id'] = $photo->id;
        }

        $user->update($input);

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id); // tukaj najprej najdemo userja

//        unlink(base_path(). $user->photo->file); //potem zbrišemo sliko, ki je vezana nanj

        $user->delete(); //potem še zbrišemo userja

        Session::flash('deleted_user', 'Uporabnik je bil odstranjen');

        return redirect('/admin/users');

    }

}
