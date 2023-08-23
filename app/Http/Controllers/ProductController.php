<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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

    public function create(Request $request)
    {
        Product::create($request->all());

        return  redirect()->route('admin.produto')->with('success', 'Contato atualizado com sucesso!');
    }
}
