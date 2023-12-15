<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    public function index()
    {
        $usuarios = User::all();
        return view ('admin.usuarios.index', compact('usuarios'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user = User::create($user);

        Auth::login($user);
        return redirect()->route('admin.dashboard');
    }

   
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('admin.usuarios')->with('sucesso', 'Usuário removido com sucesso!');
    }
}
