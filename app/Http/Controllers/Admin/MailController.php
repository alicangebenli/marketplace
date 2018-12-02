<?php

namespace App\Http\Controllers\Admin;

use App\Mail\UserNewsMail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Mail İşlemleri";
        return view('admin.mail.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        //
        $this->validate(request(),
            ['text' => 'required']
        );

        foreach(User::all() as $user){
            Mail::to($user->email)->send(new UserNewsMail(request()->input('text')));
        }
        Session::flash('status',1);
        return redirect()->action('Admin\MailController@index');

    }


}
