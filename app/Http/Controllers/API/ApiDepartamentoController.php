<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class ApiDepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        return $departamentos;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_departamento' => 'required'
        ]);

        return Departamento::create($request->all());
    }

    public function show($id)
    {
        return Departamento::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $departamentos = Departamento::findOrFail($id);
        $departamentos->update($request->all());
        return $departamentos;
    }

    public function destroy($id)
    {
        return Departamento::destroy($id);
    }
}
