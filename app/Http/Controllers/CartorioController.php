<?php

namespace App\Http\Controllers;

use App\Models\Cartorio;
use App\Models\Municipio;
use Illuminate\Http\Request;

class CartorioController extends Controller
{
    public function index()
    {
        $cartorios = Cartorio::with('municipio')->get();

        return view('cartorios.index', compact('cartorios'));
    }

    public function create()
    {
        $municipios = Municipio::all();

        return view('cartorios.create', compact('municipios'));
    }

    public function store(Request $request)
    {
        Cartorio::create([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'tabeliao' => $request->tabeliao,
            'municipio_id' => $request->municipio_id,
            'ativo' => $request->has('ativo') ? 1 : 0
        ]);

        return redirect('/cartorios');
    }

    public function edit($id)
    {
        $cartorio = Cartorio::findOrFail($id);
        $municipios = Municipio::all();

        return view('cartorios.edit', compact('cartorio', 'municipios'));
    }

    public function update(Request $request, $id)
    {
        $cartorio = Cartorio::findOrFail($id);

        $cartorio->update([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'tabeliao' => $request->tabeliao,
            'municipio_id' => $request->municipio_id,
            'ativo' => $request->has('ativo') ? 1 : 0
        ]);

        return redirect('/cartorios');
    }

    // ADICIONADO (DELETE)
    public function destroy($id)
    {
        $cartorio = Cartorio::findOrFail($id);
        $cartorio->delete();

        return redirect('/cartorios');
    }
}