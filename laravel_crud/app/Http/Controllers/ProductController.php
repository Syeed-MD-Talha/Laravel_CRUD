<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("files.index", ['products' => $products]);
    }

    public function create()
    {
        return view("files/create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "qty" => "required|numeric",
            "price" => "required",
            "description" => "nullable"
        ]);

        $newproduct = Product::create($data);

        return redirect(route('firstPage'));
    }

    public function edit(Product $path)
    {
        return view("files/edit", ["product" => $path]);
        //dd($path);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            "name" => "required",
            "qty" => "required|numeric",
            "price" => "required",
            "description" => "nullable"
        ]);

        $product->update($data);

        return redirect(route("firstPage"))->with('success', 'Product Updated Successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route("firstPage"))->with('success', 'Product delete Successfully');
    }

}
