<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function edit(){

        $title  = "Ayarlar";
        return view('admin.profile.edit');
    }
    public function update($id){
//        $title = ""
            $this->validate(request(),
                [
                   'password' => 'required|confirmed'
                ]);
            User::where('id',$id)->update();
            Session::flash('status',1);
            return redirect()->action('Admin\AdminController@edit');
    }
}
