<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\admin;

class profilController extends Controller
{
    public function index(Request $request) {


        $this->validate($request, [


            'name'      => 'required',
            'email'     => 'required'


        ]);

        $admin = DB::table('admins')->where('id', '=',Auth::guard('admin')->user()->id)->update([

            'name'      => $request->input('name'),
            'email'     => $request->input('email')

        ]);
        return redirect('adminPanel/profil')->with('success', 'done successfully');


}
public function editPass(Request $request) {

    $this->validate($request, [

        'oldPass'  => 'required',
        'newPass'  => 'required|min:7',
        'password' => 'required|required_with:newPass|same:newPass'
    ]);

    $password = Auth::guard('admin')->user()->password;
    if (Hash::check($request->oldPass, $password)) {
    
        $pass = admin::find(Auth::guard('admin')->user()->id);
        
        $pass->password = Hash::make($request->input('password'));
        $pass->save();
        Auth::guard('admin')->logout();
        return redirect('adminPanel/login');
    
    } else {

        return redirect('adminPanel/profil')->with('error', 'The password is incorrect');

    }

}
public function logout()
{
    Auth::guard('admin')->logout();
    return redirect('/');
}
}
