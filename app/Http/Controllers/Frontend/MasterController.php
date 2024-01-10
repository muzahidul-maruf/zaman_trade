<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $products = Product::where('is_featured',1)->latest()->take(8)->get();
        return view('frontend.pages.home', compact(['products']));
    }
    public function about_us()
    {
        return view('frontend.pages.about');
    }
    public function sister_concern()
    {
        return view('frontend.pages.sister-concern');
    }
    public function agricultural_products_producer()
    {
        return view('frontend.pages.service.agricultural-products-producer');
    }
    public function agro_machinery_supplier()
    {
        return view('frontend.pages.service.agro-machinery-supplier');
    }
    public function warehouse_facility()
    {
        return view('frontend.pages.service.warehouse-facility');
    }
    public function manpower_outsourcing_and_vendor_management()
    {
        return view('frontend.pages.service.manpower-outsourcing-and-vendor-management');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function clients()
    {
        return view('frontend.pages.clients');
    }
    public function allProduct()
    {

        $products = Product::paginate(9);

        return view('frontend.pages.product.all-products', compact(['products']));
    }
    public function productDetails($id)
    {

        $product = Product::find($id);
        $other_products = Product::inRandomOrder()->limit(4)->get();
        if ($product) {
            return view('frontend.pages.product.productDetails', compact(['product', 'other_products']));
        }
        abort(404);
    }
    public function products()
    {
        return view('frontend.pages.product.all-products');
    }


    public function message_store(Request $request)
    {
        if ($request->isMethod('post')) {

            $validated = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);

            //Insert data into database
            $model = new Message();

            $model->name = $request->name;
            $model->phone = $request->phone;
            $model->email = $request->email;
            $model->address = $request->address;
            $model->type_of_query = $request->type_of_query;
            $model->subject = $request->subject;
            $model->message = $request->message;

            $model->save();
        }
        return back()->with('message', 'Message has been sent...!');
    }
}
