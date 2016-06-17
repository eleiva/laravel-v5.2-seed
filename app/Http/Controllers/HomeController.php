<?php

namespace LaravelBootstrapSeed\Http\Controllers;

use LaravelBootstrapSeed\Http\Requests;
use Illuminate\Http\Request;
use LaravelBootstrapSeed\User;
use LaravelBootstrapSeed\AccessLog;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => array('index')]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( !\Auth::check() ){
          return view('welcome');
        } else {
          return redirect('users');
        }
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('users')->with('users',$users);
    }

    public function accessLog()
    {
        $accessLogs = AccessLog::paginate(10);
        return view('accesslog')->with('accessLogs',$accessLogs);
    }

}
