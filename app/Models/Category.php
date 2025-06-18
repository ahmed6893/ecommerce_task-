<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Category extends Model
{
     protected $fillable = ['name', 'description', 'status', 'image'];


     public static function getImageUrl($image)
    {
        $imageName = uniqid().'.'.$image->getClientOriginalExtension();
        $directory = 'admin/images/category/';
        $image->move(public_path($directory), $imageName);
        return $directory . $imageName;
    }
    public static function saveCategory($request)
    {
        $data = $request->only(['name', 'description', 'status']);
        if ($request->hasFile('image')) {
            $data['image'] = self::getImageUrl($request->file('image'));
        }
        self::create($data);
    }

    public static function updateCategory($request,$id)
    {
        $category = self::findOrFail($id);
        $data = $request->only(['name', 'description', 'status']);

        if ($request->hasFile('image')) {
            if (File::exists(public_path($category->image))) {
                File::delete(public_path($category->image));
            }
            $data['image'] = self::uploadImage($request->file('image'));
        }

        $category->update($data);
    }

    public static function deleteCategory($id)
    {
        $category = self::findOrFail($id);
        if (File::exists(public_path($category->image))) {
            File::delete(public_path($category->image));
        }
        $category->delete();
    }
}
