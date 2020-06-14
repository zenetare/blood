<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->guard('admin')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('adminPanel');
        } else {

            return redirect('adminPanel/login')->with('error', 'المعلومات غير صحيحة');
        }
    }
    public function logout() {

        Auth::guard('admin')->logout();

        return redirect('/');

    }
}
