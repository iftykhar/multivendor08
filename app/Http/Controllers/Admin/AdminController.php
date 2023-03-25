<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function login(){
        return view('admin.login');
    }

    public function profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.profile',compact('adminData'));

    }

    public function changepassword(){
        return view('admin.changepassword');
    }

    public function updatepassword(Request $request){
        
        $request->validate([
            'oldpass' => 'required',
            'newpass' => 'required',
            'cpass' => 'required|same:newpass',
        ]);

        $dbold = Auth::user()->password;
        $old = $request->oldpass;
        // dd(Hash::check($old,$dbold));
        if(Hash::check($old,$dbold)){
            $finduser = User::find(Auth::user()->id);
            $finduser->password = bcrypt($request->newpass);
            $finduser->save();
            return redirect()->route('admin.profile')->with('msg','password updated successfully');
        }else{
            return back()->with('error','old password not matching');

        }
    }
}
