<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ModelsClientes;
use App\Http\Requests\clienteUpdate;

class ApiCliente extends Controller
{
    public function index()
    {
        return ModelsClientes::all();
    }
    public function store(Request $request)
    {
        ModelsClientes::create($request->all());
    }

    public function show($id)
    {
        return ModelsClientes::findOrFail($id);
    }

    public function update(clienteUpdate $request, $id)
    {

        $cliente = ModelsClientes::findOrFail($id);
        $cliente->update($request->all());
        return $cliente;
    }

    public function destroy($id)
    {
        $cliente = ModelsClientes::findOrFail($id);
        $cliente->delete();
    }
}
