<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
   public function index(): View {
       $categories = DB::table('categories')->get();

       return view('admin.categoria', ['categories' => $categories]);
   }

    public function creating(): View
    {
        $categories = DB::table('categories')->get();

        return view('admin.nova-categoria', ['categories' => $categories]);
    }

    public function create(Request $request)
    {
        Category::create($request->all());

        return  redirect()->route('admin.categoria')->with('success', 'Categoria criada com sucesso!');
    }
}
