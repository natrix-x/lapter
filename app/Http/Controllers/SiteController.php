<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pack;
use App\Product;
use App\Car;

class SiteController extends Controller
{
    public function index() {

        $navs = DB::table('navs')->get();
        $cars = Car::orderBy('name','desc')->where('is_relevant', 1)->take(8)->get();

        return view('site.index', compact('navs', 'cars'));
    }

    public function contacts() {

        $navs = DB::table('navs')->get();

        return view('site.contacts', compact('navs'));
    }

    public function aboutUs() {

        $navs = DB::table('navs')->get();

        return view('site.about', compact('navs'));
    }

    public function delivery() {

        $navs = DB::table('navs')->get();
        $products = Product::orderBy("name",'desc')->get();
        $pack = Pack::all();

        return view('site.delivery', compact('navs', 'products', 'pack'));
    }
}
