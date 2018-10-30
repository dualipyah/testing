<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function register(Request $request){
		$data = array("name"=> Auth::user()->name, "email"=> Auth::user()->email);
		return view('register',array("ses"=>$data));
	}
	
	public function all_admin(){
		return view('admin_page');
	}
	
	public function all_data(){
		$data = array("id"=> Auth::user()->id, "name"=> Auth::user()->name, "email"=> Auth::user()->email);
		return view('all_data',array("ses"=>$data));
	}
	
	public function all_user(){
		return view('user_page');
	}
	
	
}
