<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $request->input('title', '');
        $query = Product::orderBy('created_at', 'DESC');
        
        if (!empty($title)) {
            $query->where('title', 'like', '%' . $title . '%');
        }

        $product = $query->paginate(5);

        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'stock' => 'required|numeric',
            'product_code' => 'required|string|max:255',
            'description' => 'required|string',
            'expired_date' => 'required|date',
            'jenis_satuan' => 'required|string|max:255',
        ]);

        $fileName = time() . '.' . $request->file('images')->getClientOriginalExtension();
        $request->file('images')->storeAs('public/images/', $fileName);

        Product::create([
            "images" => $fileName,
            "title" => $request->title,
            "description" => $request->description,
            "stock" => $request->stock,
            "product_code" => $request->product_code,
            "expired_date" => $request->expired_date,
            "jenis_satuan" => $request->jenis_satuan,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'images' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'stock' => 'required|numeric',
            'product_code' => 'required|string|max:255',
            'description' => 'required|string',
            'expired_date' => 'required|date',
            'jenis_satuan' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "stock" => $request->stock,
            "product_code" => $request->product_code,
            "expired_date" => $request->expired_date,
            "jenis_satuan" => $request->jenis_satuan,
        ];

        if ($request->hasFile('images')) {
            $imgName = time() . '.' . $request->file('images')->getClientOriginalExtension();
            $request->file('images')->storeAs('public/images/', $imgName);
            if ($product->images != null) {
                Storage::delete('public/images/' . $product->images);
            }
            $data['images'] = $imgName;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->images) {
            Storage::delete('public/images/' . $product->images);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
