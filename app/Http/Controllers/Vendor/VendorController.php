<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function index(){
        return view('vendor.dashboard');
    }
    public function login(){
        return view('vendor.login');
    }

    public function profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('vendor.profile',compact('adminData'));

    }

    public function changepassword(){
        return view('vendor.changepassword');
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
            return redirect()->route('vendor.profile')->with('msg','password updated successfully');
        }else{
            return back()->with('error','old password not matching');

        }
    }
}

