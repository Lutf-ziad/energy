<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function firebase()
    {

    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        //   dd($request->all());
        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->with('error', 'Invalid Login');
    }

    public function logout()
    {
        Auth::guard()->logout();
        Session::flush();

        return redirect(route('login'));
    }
}
