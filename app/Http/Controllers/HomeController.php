<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user = Auth::user();
        return view('admin/index',['user'=>$user]);
    }

    public function console()
    {
        $user_key = Auth::user()->key;
        $logs_count = DB::table('logs')->where('user_key',$user_key)->count();
        return view('admin/console',['logs_count'=>$logs_count]);
    }
}
