<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function listar()
    {
        $category = Category::orderBy('id','desc')->get();
        return view('category.listar', compact('category'));

    }

    public function create(){
        return view('category.create');
    }

    public function store( Request $request){
        $category = new Category();
        $category->codigo = $request->codigo;
        $category->iva = $request->iva;
        $category->descripcion = $request->descripcion;
        $category->save();

        return redirect()->route('category.listar');
    }

    public function show ($id)
    {
        $category=Category::find($id);
        return view('category.show', compact('category'));
    }

    public function destroy ( Category $category)
    {
        $category->delete();
        return redirect()->route('category.listar');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->codigo = $request->codigo;
        $category->iva = $request->iva;
        $category->descripcion = $request->descripcion;
        $category->save();

        return redirect()->route('category.listar');
    }
}
