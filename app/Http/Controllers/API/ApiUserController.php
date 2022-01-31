<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:100',
            'lastname' => 'required|max:100',
            'email'    => 'required|email',
            'password' => 'required|min:8',
            'departamento_id' => 'required'
        ]);

        return $users = User::create($request->all());
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);

        $users->names = $request->get('name');
        $users->lastname = $request->get('lastname');
        $users->email = $request->get('email');
        $users->password = bcrypt($request->get('password'));
        $users->save();

        return $users;
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }
}
