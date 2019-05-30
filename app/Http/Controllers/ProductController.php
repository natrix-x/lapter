<?php

namespace App\Http\Controllers;

use App;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $navs = DB::table('navs')->get();
        $cars = Car::all();

        return view('products.index', compact('cars', 'navs'));
    }

    public function show($id) {
        $navs = DB::table('navs')->get();
        $product = App\Product::find($id);
        $car = Car::find($id);
        return view('products.show', compact('product','car', 'navs'));
    }
}
