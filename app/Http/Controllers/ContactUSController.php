<?php

namespace App\Http\Controllers;

use App\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactUSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactUS::all()->sortByDesc('termin');

        return view('admin.contactus.index', compact('contacts'));
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
        ContactUs::findOrFail($id)->update($request->all());

        return redirect('/admin/contactus');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactUS::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function contactUS(){

        return view('contactUs');
    }

    public function contactUSPost(Request $request){


        $this->validate($request, [
            'ime' => 'required',
            'email' => 'required|email',
            'termin' => 'required',
            'sporocilo' => 'required',
//            'g-recaptcha-response' => 'required'
        ]);



        ContactUS::create($request->all());

        Mail::send('email', array(
            'ime' => $request->get('ime'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'termin' => $request->get('termin'),
            'sporocilo' => $request->get('sporocilo')
        ), function ($message) {
                $message->from('info@salon-pretty.si');
                $message->to('sustar.anze@gmail.com', 'Admin')->subject('Sporočilo s spletne strani');
        });

        $token = $request->input('g-recaptcha-response');

        if (strlen($token) > 0) {

            return view('mail.success'); }

        else {
            return redirect()->back();
        }




//       return back()->with('success', 'Thanks for contacting us!');





    }


}
