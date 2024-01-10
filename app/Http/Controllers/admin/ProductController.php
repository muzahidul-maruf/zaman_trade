<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->get();
        return view('admin_panel.pages.products.index', compact(['products']));
    }

    public function create()
    {
        return view('admin_panel.pages.products.create');
    }

    public function store(Request $request)
    {
        //Validation
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $model = new Product();
        $model->name = $request->name;
        $model->description = $request->description;
        //image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_name = time() . '.' . $request->image->getClientOriginalExtension();
            $path = '/common/images/products/';
            $image->move(public_path($path), $new_name);
            $model->image = $path . $new_name;
        }

        $model->save();
        return back()->with('message', "Product Add Successfull.");
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);

        // return $product;
        if ($product) {
            return view('admin_panel.pages.products.edit', compact('product'));
        }
        return abort(404);
    }

    public function update(Request $request, $id)
    {
        //Validation
        $validated = $request->validate([
            'name' => 'required'
        ]);
        $model =  Product::find($id);
        $model->name = $request->name;
        $model->description = $request->description;

        //image upload
        if ($request->hasFile('image')) {
            //remove old image form folder if new image comes
            if ($model->image != null || $model->image != "") {
                $image_file = public_path($model->image);
                if (file_exists($image_file)) {
                    unlink($image_file);
                }
            }
            $image = $request->file('image');
            $new_name = time() . '.' . $request->image->getClientOriginalExtension();
            $path = '/common/images/products/';
            $image->move(public_path($path), $new_name);
            $model->image = $path . $new_name;
        }

        $model->save();
        return back()->with('message', "Product Updated Successfull.");
    }
    public function destroy($id)
    {
        $model = Product::find($id);

        if ($model) {
            //remove old image form folder if new image comes
            if ($model->image != null || $model->image != "") {
                $image_file = public_path($model->image);
                if (file_exists($image_file)) {
                    unlink($image_file);
                }
            }
            $model->delete();
            return back()->with('message', 'Delete Successful.');
        }
        return abort(404);
    }
    public function featured($id, $is_featured)
    {
        $model = Product::findOrFail($id);
        if ($is_featured == 0) {
            $model->is_featured = 1;
        } elseif ($is_featured == 1) {
            $model->is_featured = 0;
        }
        $model->save();
        return back()->with('message', 'Update Successful.');
    }
}
