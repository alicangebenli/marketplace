<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Menuler";
        return view('admin.menu.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Menu Ekle";
        return view('admin.menu.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'url' => 'required'
        ]);
        $input = [];
        $input["title"] = $request->input('title');
        $input["url"] = $request->input('url');
        Menu::create($input);
        Session::flash('status',1);
        return redirect()->action('Admin\MenuController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = "Menu Düzenle";
        $menu = Menu::where('id',$id)->first();
        return view('admin.menu.edit',compact('menu','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
           'title'=>'required',
           'url'=>'required'
        ]);
        $input = [];
        $input["title"] = $request->input('title');
        $input["url"] = $request->input('url');
        Menu::where('id',$id)->update($input);
        Session::flash('status',1);
        return redirect()->action('Admin\MenuController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
