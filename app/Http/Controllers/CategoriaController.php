<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
   
	public function index()
	{
		$categorias = Categoria::all();
		return view('categoria.index', 
			['categorias' => $categorias]
		);
	}

	public function create()
	{
		return view('categoria.create', ["categoria" => null]);
	}

	public function store(Request $request)
	{
		$categoria = Categoria::create($request->all());
		return redirect()->route('categorias.index');
	}

	public function edit($categoria)
	{
		$categoria = Categoria::findOrFail($categoria);
		return view('categoria.create', ["categoria" => $categoria]);
	}

	public function update(Request $request, $categoria)
	{
		$categoria = Categoria::findOrFail($categoria);
		$categoria->update($request->all());
		return redirect()->route('categorias.index');
	}

}
