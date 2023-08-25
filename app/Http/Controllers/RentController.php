<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function index(): View
    {
        $rent = DB::table('rent')->get();
 
        return view('admin.aluguel', ['rent' => $rent]);
    }

    public function creating(): View
    {
        $rent = DB::table('rent')->get();
 
        return view('admin.novo-aluguel', ['rent' => $rent]);
    }

    public function create(Request $request)
    {
        Rent::create($request->all());

        return  redirect()->route('admin.aluguel')->with('success', 'Aluguel realizado com sucesso!');
    }

}
