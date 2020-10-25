<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;

class AuthController extends Controller
{

	//Signup function ------------

	public function signupfunc(Request $request){
        $result = DB::table('users')->insert([
        	'name' => $request->fname,
            'email' => $request->email,
            'password' => bcrypt($request->psw)
        ]);

       return redirect('/login');
    }

    //login function ------------

	public function loginfunc(Request $request){


        $credentials = $request->only('email', 'password');

        //dd($credentials);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        else{
            return back();
        }
    }

    //logout function ------------

     public function logout() {
        Auth::logout();
        return redirect('login');
      }

      //to fetch data from users table --------

    public function userDetails(){
        $resp = DB::table('users')->get();
        return view('dashboard', ['ed'=>$resp]);
    }

}
