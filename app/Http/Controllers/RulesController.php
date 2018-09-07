<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RulesController extends Controller
{

    public function index()
    {
        $rules = DB::table('rules')->where('user_key',Auth::user()->key)->get();
        return view('admin/rules',['rules'=>$rules]);
    }

}
