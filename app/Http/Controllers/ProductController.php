<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = DB::table('products')->get();
 
        return view('admin.produto', ['products' => $products]);
    }


    public function creating(): View
    {
        $products = DB::table('products')->get();
 
        return view('admin.produto-novo', ['products' => $products]);
    }


      /**
     * Create a new product.
     *
     * @param  array  $data
     * @return \App\Models\Product
     */
    protected function create(array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'size' => $data['size'],
            'color' => $data['color'],
            'origin_product' => $data['origin_product'],
            'obs' => $data['obs'],
            'image' => $data['image'],
            'description' => $data['description'],
        ]);
    }

}
