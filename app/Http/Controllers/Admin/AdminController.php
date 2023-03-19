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
        $old = Hash::make($request->password);
        $id = Auth::user()->id;
        // $findadmin = User::find($id);
        $oldpassword =  User::where('id',$id)->first();
        $oldpassword->password = Hash::make($request->newpass);
        // if ($oldpassword) {
        //     $oldpassword->password = Hash::make($request->newpass);
        //     $oldpassword->update();
        // }
        $oldpassword->update();
        return back();
    }
}
