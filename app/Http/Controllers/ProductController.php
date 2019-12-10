<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produts = ['Product 01', 'Product 02'];
        return $produts;
    }
}
