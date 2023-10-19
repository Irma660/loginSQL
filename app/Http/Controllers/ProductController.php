<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    
    public function create()
    {
        return view('products.create');
    }
    
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Producto agregado correctamente');
    }
    
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }
    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }
}
