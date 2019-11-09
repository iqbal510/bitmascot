<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\ Auth;
use Illuminate\Support\facades\ Redirect;;
use Requird;
use App\User;
use Hash;
class OwnController extends Controller
{
    
	 public function userpp()
    {
		
		return view('userp');

    }


    public function admin()
    {
		
		return view('admin')->with('users',User::all());
		

    }

   

    public function changep()
    {
		
		return view('changep');

    }

    public function passwordupdate(Request $request)
    {

    	

    	$this->validate($request,[

    		'oldpassword' => 'required',
    		'password'    => 'required|confirmed'

    	]);



    	$password = Auth::user()->password;
    	$oldpassword =$request->oldpassword;

    	if (Hash::check($oldpassword, $password)) {
    	 	$user = User::find(Auth::id());
    	 	$user->password=Hash::make($request->password);
    	 	$user->save();
    	    Auth::logout();

    	 	return Redirect()->route('login')->with('success','Youer Password successfully changes,Now log in');
    	 }else {

    	 	 return Redirect()->back()->with('error','Opps! Current Password doesnot match!');
    	 } 
		
	

    }


}
