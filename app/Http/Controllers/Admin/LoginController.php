<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function loginForm()
    {

        return view('admin.login');
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if(!Auth::validate($credentials)):
            return redirect()->back()->with('error', 'Invalid credentials');
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

            return redirect('/admin');
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();
                return redirect('/');
    }

    public function profileForm()
    {
        return view('admin.profile');
    }

    // public function updatePassword(Request $request)
    // {
    //     $request->validate([
    //         'current_password' => ['required', 'min:6', function ($attribute, $value, $fail) {
    //             if (!Hash::check($value, Auth::guard('admin')->user()->password)) {
    //                 return $fail(__('The current password is incorrect.'));
    //             }
    //         }],
    //         'password' => ['required', 'min:6'],
    //     ]);

    //     if (Admin::find(Auth::guard('admin')->user()->id)->update(['password' => Hash::make($request->password)])) {
    //         return redirect('/admin')->with('success', 'Password changes successfully');
    //     } else {
    //         return redirect()->back()->with('error', 'Password couldnot be updated');;
    //     };
    // }
}
