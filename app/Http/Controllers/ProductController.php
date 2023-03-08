<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('product');
    }

    public function civil(){
        return view('product');
    }

    public function power(){
        return view('product');
    }

    public function plumbing(){
        return view('product');
    }
}
