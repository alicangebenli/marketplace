<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        Validator::extend('kategori_var_mi', function($attribute, $value, $parameters, $validator) {
            $kategori = \DB::table('categories')->where('id',$value)->get()->first();
            if($kategori){
                return true;
            }else{
                return false;
            }
        });
    }

    public function index()
    {
        //
        $title = "Ürünler";
        $products = Product::all();
        return view('admin.product.index',compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Ürün Ekle";
        $categories = Category::all();
        return view('admin.product.create',compact('title','categories'));
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
            "content" => "required",
            "price"=>"required",
            "tag"=>"required",
            "category_id"=>"required|kategori_var_mi"
        ]);
        $data["title"] = $request->input('title');
        $data["content"] = $request->input('content');
        $data["price"]= $request->input('price');
        $data["tag"]= $request->input('tag');
        $data["category_id"]=$request->input('category_id');

        $product = Product::create($data);
        $time = time();
        if($firt_image = $request->file("image_first"))
        {
            $firt_image_name = $time.'-'.str_slug(pathinfo($firt_image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($firt_image->getClientOriginalExtension());
            $thumb = "thumb_".$time.'-'.str_slug(pathinfo($firt_image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($firt_image->getClientOriginalExtension());
            ImageManagerStatic::make($firt_image->getRealPath())->resize(700,420)->save(public_path("uploads/".$firt_image_name));
            ImageManagerStatic::make($firt_image->getRealPath())->resize(100,55)->save(public_path("uploads/".$thumb));
            $input = [];
            $input["url"] = $firt_image_name;
            $input["imageable_id"] = $product->id;
            $input["imageable_type"] = "App\Product";
            $input["is_first"] = true;
            Image::create($input);
            $time++;
        }
        if($images = $request->file("image"))
        {

            foreach ($images as $image){

                $image_name = $time.'-'.str_slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($image->getClientOriginalExtension());
                $thumb = "thumb_".$time.'-'.str_slug(pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($image->getClientOriginalExtension());
                ImageManagerStatic::make($image->getRealPath())->save(public_path("uploads/".$image_name));
                ImageManagerStatic::make($image->getRealPath())->save(public_path("uploads/".$thumb));
                $input = [];
                $input["url"] = $image_name;
                $input["imageable_id"] = $product->id;
                $input["imageable_type"] = "App\Product";
                Image::create($input);
                $time++;
            }
        }
        Session::flash('status',1);
        return redirect()->action('Admin\ProductController@create');
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
        return (int)Product::find(3)->fimg->id;
//        $product = new Product();
//        return dd($product->getfimgAttribute());
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
        $title = "Ürün Düzenle";
        $product = Product::find($id)->get()->first();
        $product_first_image_url = Product::find($id)->fimg->url;
        $product_other_image_url = Product::find($id)->images()->where('images.is_first',0)->get();
        $categories = Category::all();

        return view('admin.product.edit',compact('product','title','categories','product_first_image_url','product_other_image_url'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resimler = Product::find($id)->images;
        foreach ($resimler as $resim){
            @unlink(public_path("uploads/".$resim->url));
            @unlink(public_path("uploads/thumb_".$resim->url));
        }
        Image::where("imageable_id",$id)->where("imageable_type","App\Page")->delete();
        Product::destroy($id);
        Session::flash('status',1);
        return back();
        //
    }

    public function firstimageupload($id){

        @unlink(public_path("uploads/".Product::find($id)->fimg->url));
        @unlink(public_path("uploads/thumb_".Product::find($id)->fimg->url));
        $time = time();
            $first_image = Input::file('image_first');
            $first_image_name = $time.'-'.str_slug(pathinfo($first_image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($first_image->getClientOriginalExtension());
            $thumb = "thumb_".$time.'-'.str_slug(pathinfo($first_image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($first_image->getClientOriginalExtension());
            ImageManagerStatic::make($first_image->getRealPath())->resize(750,230)->save(public_path("uploads/".$first_image_name));
            ImageManagerStatic::make($first_image->getRealPath())->resize(99,55)->save(public_path("uploads/".$thumb));
            $input = [];
            $input["url"] = $first_image_name;
            $input["is_first"] = true;
        Image::find((int)Product::find($id)->fimg->id)->update($input);
    }
    public function otherimageupload($id){

        $time = time();
        $first_image = Input::file('product_image');
        $first_image_name = $time.'-'.str_slug(pathinfo($first_image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($first_image->getClientOriginalExtension());
        $thumb = "thumb_".$time.'-'.str_slug(pathinfo($first_image->getClientOriginalName(),PATHINFO_FILENAME)).".".str_slug($first_image->getClientOriginalExtension());
        ImageManagerStatic::make($first_image->getRealPath())->save(public_path("uploads/".$first_image_name));
        ImageManagerStatic::make($first_image->getRealPath())->save(public_path("uploads/".$thumb));
        $input = [];
        $input["imageable_id"] = $id;
        $input["url"] = $first_image_name;
        $input["imageable_type"] = "App\Product";
        Image::create($input);

    }
    public function productimagelist($id){
        if(!isset($product)){
            $product = Product::find($id)->get()->first();
        }
        $product_other_image_url = $product_other_image_url = Product::find($id)->images()->where('images.is_first',0)->get();
        return view('admin.product.render.image_list',compact('product_other_image_url','product'));
    }
    public function otherimagedelete($product_id,$image_id){

        @unlink(public_path("uploads/".Product::find($product_id)->images()->where('id',$image_id)->first()->url));
        @unlink(public_path("uploads/thumb_".Product::find($product_id)->images()->where('id',$image_id)->first()->url));
        Image::destroy($image_id);

    }
}
