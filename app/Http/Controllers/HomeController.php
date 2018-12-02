<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $categories;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::where('rel',0)->get();

        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('id','desc')->paginate(2);
        $categories = $this->categories;
        return view('home',compact('products','categories'));
    }
    public function product(string $slug,int $id){

        $product = Product::where('id',$id)->firstOrFail();
        return view('product',compact('product'));

    }
    public function category($slug){
        $category = Category::where('slug',$slug)->firstOrFail();
        return view('category',compact('category'));
    }

}
