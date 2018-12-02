<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use stdClass;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $data;
    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function index()
    {
        //
        $this->data->title = "Kategoriler";
        $this->data->categories = Category::get();
        return view('admin/category/index')->with('data',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data->title = "Kategori Oluştur";
        $this->data->categories = Category::all();
        return view('admin/category/create')->with('data',$this->data);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required'
        ]);
        $category = new Category();
        $category->title = $request->input('title');
        $category->content = $request->input('content');
        $category->rel = $request->input('rel');
        $result = $category->save();
        if($result){
            echo "ok";
        }else{
            echo "no";
        }

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
        $this->data->title = "Kategori Düzenle";
        $this->data->categories = Category::all();
        $this->data->this_category = Category::find($id)->get()->first();
        return view('admin/category/edit')->with('data',$this->data);
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
        $result = Category::find($id)->update($request->all());
        if ($result){
            echo "ok";
        }else{
            echo "no";
        }
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
        $result =  Category::find($id)->delete();
        if($result){
            echo "ok";
        }else{
            echo "no";
        }
    }

}
