<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
   
    public function index()
    {
        $categorias = Categoria::paginate(3);
        return view('admin.categorias.index', compact('categorias'));
    }

  
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $categoria = $request->all();
        $categoria = Categoria::create($categoria);
        return redirect()->route('admin.categorias')->with('sucesso','Categoria cadastrado com sucesso!');
    }

    
    public function show(Categoria $categoria)
    {
        //
    }

    public function edit(Categoria $categoria)
    {
        //
    }

   
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('admin.categorias')->with('sucesso', 'Categoria removida com sucesso!');
    }
}
