<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view('cliente.index',[
            'clientes' => $clientes
        ]);
    }

    public function create(Request $request)
    {
        $cliente = new Cliente();

        if($request->isMethod('get')){

            return view('cliente.form', [
                'cliente' => $cliente
            ]);
        }

        $this->handleRequest($cliente);

        return redirect()->route('cliente_index');
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        if($request->isMethod('get')){
            return view('cliente.form', [
                'cliente' => $cliente
            ]);
        }

        $this->handleRequest($cliente);

        return redirect()->route('cliente_index');
    }

    private function handleRequest(Cliente &$cliente)
    {
        $request = request();

        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->documento = $request->documento;

        $cliente->save();
    }

    public function delete($id)
    {
    }
}
