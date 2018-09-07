<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConfigsController extends Controller
{
    public function index()
    {
        $config = DB::table('configs')->where('user_key',Auth::user()->key)->get()->first();
        return view('admin/config',['config' => $config]);
    }
}
