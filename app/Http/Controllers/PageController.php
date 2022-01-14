<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data  = Product::all();
        return view("index",compact("data"));
    }
}
