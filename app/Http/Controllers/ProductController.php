<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function form()
    {
        return view('form_products');
    }

    public function create(Request $request)
    {
        // Product Validation
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);
        // Add Product
        Product::create($data);
        // Redirection
        return redirect('products');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect('products');
        }
    }

    public function form_update($id)
    {
        $product = Product::find($id);
        return view('products_update', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);
        $product->update($data);
        return redirect('products');
    }
}
