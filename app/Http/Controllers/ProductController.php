<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($type = "all")
    {
        if($type !== "all"){
            return view("user.product.$type");
        }
        return view('user.product.index');
    }
}
