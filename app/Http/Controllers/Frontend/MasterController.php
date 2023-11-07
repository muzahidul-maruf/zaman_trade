<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {

        // return view('frontend.layout.master');
        return view('frontend.pages.home');
    }
    public function about_us()
    {
        return view('frontend.pages.about');
    }

    public function seed_processing()
    {
        return view('frontend.pages.services.seed_processing');
    }

    public function seed_packaging()
    {
        return view('frontend.pages.services.seed_packaging');
    }
    public function seed_laboratory()
    {
        return view('frontend.pages.services.seed_laboratory');
    }
    public function seed_storage()
    {
        return view('frontend.pages.services.seed_storage');
    }

    public function transport()
    {
        return view('frontend.pages.services.transport');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function clients()
    {
        return view('frontend.pages.clients');
    }
    public function gallery()
    {
        return view('frontend.pages.gallery');
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
