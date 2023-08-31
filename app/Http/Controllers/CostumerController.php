<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CostumerRequest;
use App\Models\Costumer;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CostumerController extends Controller
{
    public function index(): View
    {
        $costumers = Costumer::all();

        return view('admin.cliente', ['costumers' => $costumers]);
    }

    public function creating(): View
    {
        $costumers = Costumer::all();

        return view('admin.novo-cliente', ['costumers' => $costumers]);
    }

    public function create(CostumerRequest $request)
    {
        Costumer::create($request->all());

        return  redirect()->route('admin.cliente')->with('success', 'Cliente criado com sucesso!');
    }
}
