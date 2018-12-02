<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
//Model
use App\Page;
use App\Image as Imageable;
// Facades
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class PageController extends Controller
{

    public function index()
    {
        $title = "Sayfalar";
        $pages = Page::all();
        return view('admin.page.index')->with(compact('title','pages'));
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Sayfa Ekle";
        return view('admin.page.create')->with(compact('title'));
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
            "title" => "required|max:50",
            "content" => "required"
        ]);
        $data["title"] = $request->input('title');
        $data["content"] = $request->input('content');

        $page = Page::create($data);
        if($image = $request->file("image"))
        {
            $time = time();
            $image_name = $time.'-'.str_slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($image->getClientOriginalExtension());
            $thumb = "thumb_".$time.'-'.str_slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($image->getClientOriginalExtension());
            Image::make($image->getRealPath())->save(public_path("uploads/".$image_name));
            Image::make($image->getRealPath())->save(public_path("uploads/".$thumb));
            $input = [];
            $input["url"] = $image_name;
            $input["imageable_id"] = $page->id;
            $input["imageable_type"] = "App\Page";
            Imageable::create($input);
        }
        return redirect()->action('Admin\PageController@index');
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
        $title = "Sayfa Düzenle";
        $page = Page::find($id)->get()->first();
        return view('admin.page.edit',compact('title','page'));
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
            "title" => "required|max:50",
            "content" => "required"
        ]);
        $data["title"] = $request->input('title');
        $data["content"] = $request->input('content');

        Page::find($id)->update($data);
        $page = Page::find($id)->get()->first();
        if($image = $request->file("image"))
        {
            if($page->image->url){
                @unlink(public_path("uploads/".$page->image->url));
                @unlink(public_path("uploads/thumb_".$page->image->url));
                Imageable::where("imageable_id",$id)->where("imageable_type","App\Page")->delete();
            }
            $time = time();
            $image_name = $time.'-'.str_slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($image->getClientOriginalExtension());
            $thumb = "thumb_".$time.'-'.str_slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($image->getClientOriginalExtension());
            Image::make($image->getRealPath())->save(public_path("uploads/".$image_name));
            Image::make($image->getRealPath())->save(public_path("uploads/".$thumb));
            $input = [];
            $input["url"] = $image_name;
            $input["imageable_id"] = $page->id;
            $input["imageable_type"] = "App\Page";
            Imageable::create($input);
        }
        return redirect()->action('Admin\PageController@index');
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
        $resim = Page::find($id)->image->url;

        @unlink(public_path("uploads/".$resim));
        @unlink(public_path("uploads/thumb_".$resim));
        Imageable::where("imageable_id",$id)->where("imageable_type","App\Page")->delete();
        Page::destroy($id);
        Session::flash("status",1);
        return redirect()->action('Admin\PageController@index');
    }
}
