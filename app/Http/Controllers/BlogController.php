<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class BlogController
{
    public function index() {

        $navs = DB::table('navs')->get();
        $blog = DB::table('blog')->get();
        return view('blog.index', compact('navs', 'blog'));
    }

}