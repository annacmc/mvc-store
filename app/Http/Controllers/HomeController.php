<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
        {
            $params = [
                'title' => 'Annas Travel Guides',
                'sub_title' => 'All Products Listing',
                'products' => Product::all(),
            ];

            return view('home')->with($params);
        }

}
