<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class actualiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $now=Carbon::now();
        $today=Carbon::today();
        return view('actualite', compact("now","today"));
    }
}
