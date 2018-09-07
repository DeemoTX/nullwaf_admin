<?php

namespace App\Http\Controllers;

use App\Models\WhiteList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WhiteListsController extends Controller
{

    public function index()
    {
        $urls = DB::table('whitelists')->where('user_key',Auth::user()->key)->get();
        return view('admin/white',['urls'=>$urls]);
    }

}
