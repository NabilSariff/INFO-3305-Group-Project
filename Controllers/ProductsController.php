<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{   
     function index()
    {
        
        return view('products');
    }
};
