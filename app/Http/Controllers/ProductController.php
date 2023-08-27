<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();

        return view('admin.produto', ['products' => $products]);
    }

    public function creating(): View
    {
        $categories = Category::all();

        return view('admin.produto-novo', ['categories' => $categories]);
    }

    public function create(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('admin.produto')->with('success', 'Produto cadastrado com sucesso!');
    }
}
