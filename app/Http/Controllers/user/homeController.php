<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function userreg()
    {
    	return view('user.userreg');
    }

    public function userlogin()
    {
    	return view('user.userLogin');
    } 

    public function practice()
    {
    	$sbit=[
    		'Skill'=>'feni',
    		'Based'=>'Dhaka',
    		'IT'=>'borishal'
    	];
    	return view('user.practice',compact('sbit'));
    }
}
