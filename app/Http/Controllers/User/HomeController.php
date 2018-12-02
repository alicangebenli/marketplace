<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setting(){

        return view('user.setting');
    }
    public function update_setting(Request $request){
        if($request->input('password') != "" ){
            $this->validate($request,[
                'realname' => 'required|max:50|string',
                'password' => 'required|confirmed',
                'about' => 'required'
            ]);
            $input = $request->only('realname', 'password','about');
        }else{
            $this->validate($request,[
                'realname' => 'required|max:50|string',
                'about' => 'required'
            ]);
            $input = $request->only('realname','about');
        }

        User::where('id',Auth::user()->id)->update($input);
        return redirect()->action('User\HomeController@setting');
    }

    public function purchase(){
        return view('user.purchase');
    }
    public function addcredit(){
        return view('user.addcredit');
    }
}
