<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;


class NavController extends Controller
{
    public function menu()
    {
        return view('layouts.nav');
    }
}
