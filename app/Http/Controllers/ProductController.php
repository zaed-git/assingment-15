<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
////////////////////////////////////
////////////////////////////////////
// question 5
class ProductController extends Controller
{
    //


    


public function index()
{
    // index(): Display a list of all products.
    $products = Product::all();
    return view('products.index', compact('products'));
}
// create(): Display the form to create a new product.
public function create()
{
    return view('products.create');
}
// store(): Store a newly created product.
public function store(Request $request)
{
    $product = new Product;
    
    
    $product->name = $request->name;
    $product->description = $request->description;
    

    $product->save();

    return redirect()->route('products.index');
}
// edit($id): Display the form to edit an existing product.
public function edit($id)
{
    $product = Product::find($id);
    return view('products.edit', compact('product'));
}
// update($id): Update the specified product.
public function update(Request $request, $id)
{
    $product = Product::find($id);
    
    $product->name = $request->name;
    $product->description = $request->description;
 

    $product->save();

    return redirect()->route('products.index');
}
// destroy($id): Delete the specified product.
public function destroy($id)
{
    $product = Product::find($id);
    $product->delete();

    return redirect()->route('products.index');
}
}
