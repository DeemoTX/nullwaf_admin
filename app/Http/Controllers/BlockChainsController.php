<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockChainsController extends Controller
{
    public function config()
    {
        return view('admin/blockchain');
    }
}
