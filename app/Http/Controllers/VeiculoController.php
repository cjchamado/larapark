<?php

namespace App\Http\Controllers;

use App\Veiculo;
use Illuminate\Http\Request;

use App\Http\Requests;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::all();

        return view('veiculo.index',[
            'veiculos' => $veiculos
        ]);
    }

    public function create(Request $request)
    {
        $veiculo = new Veiculo();

        if($request->isMethod('get')){

            return view('veiculo.form', [
                'veiculo' => $veiculo
            ]);
        }

        $this->handleRequest($veiculo);

        return redirect()->route('veiculo_index');
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::find($id);

        if($request->isMethod('get')){
            return view('veiculo.form', [
                'veiculo' => $veiculo
            ]);
        }

        $this->handleRequest($veiculo);

        return redirect()->route('veiculo_index');
    }

    private function handleRequest(Veiculo &$veiculo)
    {
        $request = request();

        $veiculo->placa = $request->placa;
        $veiculo->marca = $request->marca;
        $veiculo->modelo = $request->modelo;
        $veiculo->cor = $request->cor;

        $veiculo->save();
    }
}
