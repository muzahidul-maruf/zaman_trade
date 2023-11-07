<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{
    public function loginPage()
    {
        return view('admin_panel.login');
    }
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validating data
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            //check email
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return redirect()->back()->with('email_error', 'Wrong Email..');
            }
            //check password
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->with('password_error', 'Wrong Password..');
            }
            if (Auth::attempt($request->only(['email', 'password']), $request->get('remember'))) {
                // return redirect()->route('admin.dashboard')->with('message', 'Login Succcessful.');
                return redirect()->route('admin.messages')->with('message', 'Login Succcessful.');
            }
        }
    }
    public function index()
    {
        return view('admin_panel.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login-page')->with('message', 'Logout Succcessful.');
    }

    public function all_message()
    {
        $all_messages = Message::get();
        return view('admin_panel.all_messages', compact(['all_messages']));
    }


    public function destroy($id)
    {
        $model = Message::find($id);
        if ($model) {
            $model->delete();
            return back()->with('message', 'Delete Successful.');
        } else {
            return back()->with('message', 'Not Found');
        }
    }
}
