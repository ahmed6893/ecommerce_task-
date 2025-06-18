<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index',['products'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create',[
            'categories'=>Category::where('status',1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public $productId ;
    public function store(Request $request)
    {
        $request->validate([
        'name'              => 'required|string|max:255',
        'code'              => 'required|string|max:100|unique:products,code',
        'meta_title'        => 'nullable|string|max:255',
        'meta_description'  => 'nullable|string|max:500',
        'regular_price'     => 'required|numeric|min:0',
        'selling_price'     => 'required|numeric|min:0|lte:regular_price',
        'stock_amount'      => 'required|integer|min:0',
        'short_description' => 'nullable|string|max:255',
        'long_description'  => 'nullable|string',
        'status'            => 'required|boolean',
        'image'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);


        $productId = Product::saveNewProduct($request);
        $product = Product::find($productId);
        $product->categories()->attach($request->category_ids);

        return back()->with('success', 'Product Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => Category::where('status', 1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request,$product->id);
            if ($request->has('category_ids')) {
                    $product->categories()->sync($request->category_ids);
            }
        return back()->with('success','Product Has Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return back()->with('delete','Product Has Deleted');
    }
}
