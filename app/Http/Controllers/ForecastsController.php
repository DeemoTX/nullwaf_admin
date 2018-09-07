<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForecastsController extends Controller
{
    public function index()
    {
        return view('admin/forecast');
    }
}
