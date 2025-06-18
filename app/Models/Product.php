<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Product extends Model
{
        protected $fillable = [
        'name','code', 'meta_title', 'meta_description',
        'regular_price', 'selling_price', 'stock_amount',
        'short_description', 'long_description', 'product_image',
        'sales_count', 'hit_count', 'featured_status', 'status'
    ];

       public static function getImageUrl($image)
    {
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $directory = 'admin/images/productImage/';
        $image->move(public_path($directory), $imageName);
        return $directory . $imageName;
    }

    public static function saveNewProduct($request)
    {
        $data = $request->only([
            'name', 'code', 'meta_title', 'meta_description','regular_price', 'selling_price', 'stock_amount',
            'short_description', 'long_description', 'status'
        ]);

        if ($request->hasFile('image')) {
            $data['product_image'] = self::getImageUrl($request->file('image'));
        }

        $product = self::create($data);

        return $product->id;
    }

        public static function updateProduct($request, $id)
    {
        $product = self::findOrFail($id);
        $data = $request->only([
            'name','code', 'meta_title','meta_description',
            'regular_price', 'selling_price', 'stock_amount',
            'short_description', 'long_description', 'status'
        ]);

        if ($request->hasFile('image')) {
            if (File::exists(public_path($product->product_image))) {
                File::delete(public_path($product->product_image));
            }
            $data['product_image'] = self::uploadImage($request->file('image'));
        }

        $product->update($data);
    }

        public static function deleteProduct($id)
    {
        $product = self::findOrFail($id);
        if (File::exists(public_path($product->product_image))) {
            File::delete(public_path($product->product_image));
        }
        $product->delete();
    }
}
