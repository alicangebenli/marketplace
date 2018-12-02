<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{

    public function edit()
    {
        //

        $settings = Setting::all();
        return view('admin.setting.edit',compact('settings'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request,[
                    'site_url'=>'max:255',
                    'site_title'=>'max:255',
                    'site_tags'=>'max:255',
                    'site_mail'=>'max:255|email',
                    'site_content'=>'max:255'
                ]);
        Setting::find(1)->update(['value'=>$request->input('site_url')]);
        Setting::find(2)->update(['value'=>$request->input('site_title')]);
        Setting::find(3)->update(['value'=>$request->input('site_tags')]);
        Setting::find(4)->update(['value'=>$request->input('site_mail')]);
        Setting::find(5)->update(['value'=>$request->input('site_content')]);

        Session::flash('status',1);


        return back();
    }

}
