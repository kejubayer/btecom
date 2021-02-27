<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('backend.products.index', compact('products'));
    }

    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $filename = time() . '_product.' . $photo->getClientOriginalExtension();
        $request->photo->move('assets/uploads', $filename);
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'photo' => $filename
        ]);

        return redirect()->route('admin.product');


    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);
        if ($request->file('photo')) {
            if (file_exists("assets/uploads/" . $product->photo)) {
                unlink("assets/uploads/" . $product->photo);
            }
            $photo = $request->file('photo');
            $filename = time() . '_product.' . $photo->getClientOriginalExtension();
            $request->photo->move('assets/uploads', $filename);
            $product->update(['photo' => $filename]);
        }
        return redirect()->back();

    }
}
