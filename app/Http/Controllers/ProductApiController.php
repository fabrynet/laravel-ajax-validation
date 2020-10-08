<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductApiController extends Controller
{
    public function getAllProducts() {
      $products = Product::all();
      return response() -> json($products);
    }
    public function getDeletedProducts() {
      $products = Product::where('deleted', true) -> get();
      return response() -> json($products);
    }
}
