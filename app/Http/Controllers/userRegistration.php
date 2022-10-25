<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userregmodel;

class userRegistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.viewUser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('user.userreg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userregmodel=new userregmodel;
        $this->validate([
            'user_email'=>'required|unique:userregmodels',
        ]);
        $userregmodel->user_name=$request->user_name;
        $userregmodel->user_email=$request->user_email;
        $userregmodel->user_password=$request->user_password;
        $userregmodel->user_phone=$request->user_phone;
        $userregmodel->user_address=$request->user_address;
        $userregmodel->user_image=$request->image;
        $userregmodel->save();
        return redirect('reg');

        //return $request->all();
       
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
