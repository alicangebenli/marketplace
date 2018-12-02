<?php

namespace App\Http\Controllers\Admin;

use App\Bank;
use App\Category;
use App\Menu;
use App\Page;
use App\Product;
use App\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function category(){
        $categories =Category::select(['id','title','slug'])->get();

        return Datatables::of($categories)
                ->addColumn('action',function ($category){
                return  '
                        <a href="'.route("admin.category.edit",["id" => $category->id]).'" type="button" class="btn btn-primary">Düzenle</a> 
                        <a href="'.route("admin.category.destroy",["id"=>$category->id]).'" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>
                        ';
                })
                ->make();
    }
    public function bank(){
        $banks = Bank::select(['name','iban','account_name','account_number']);
        return Datatables::of($banks)
            ->addColumn('action',function ($bank){
                return  '
                        <a href="'.route("admin.bank.edit",["id" => $bank->id]).'" type="button" class="btn btn-primary">Düzenle</a> 
                        <a href="'.route("admin.bank.destroy",["id"=>$bank->id]).'" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>
                        ';
            })
            ->make();
    }
    public function page(){
        $pages = Page::select(['id','title','slug'])->get();
        return Datatables::of($pages)
            ->addColumn('action',function ($page){
                return  '
                        <a href="'.route("admin.page.edit",["id" => $page->id]).'" type="button" class="btn btn-primary">Düzenle</a> 
                        <a href="'.route("admin.page.destroy",["id"=>$page->id]).'" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>
                        ';
            })
            ->make();
    }
    public function product(){
        $products = Product::select(['id','title','price','tag','created_at','updated_at'])->get();
        return Datatables::of($products)
            ->addColumn('action',function ($product){
                return  '
                        <a href="'.route("admin.product.edit",["id" => $product->id]).'" type="button" class="btn btn-primary">Düzenle</a> 
                        <a href="'.route("admin.product.destroy",["id"=>$product->id]).'" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>
                        ';
            })
            ->make();
    }
    public function user(){
        $users = User::select(['id','realname','name','email','balance','created_at'])->get();
        return Datatables::of($users)
            ->addColumn('action',function ($user){
                return  '
                        <a href="'.route("admin.user.edit",["id" => $user->id]).'" type="button" class="btn btn-primary">Düzenle</a> 
                        <a href="'.route("admin.user.destroy",["id"=>$user->id]).'" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>
                        ';
            })
            ->make();
    }
    public function menu(){
        $menus = Menu::select(['id','title','url'])->get();
        return Datatables::of($menus)
            ->addColumn('action',function ($menu){
                return  '
                        <a href="'.route("admin.menu.edit",["id" => $menu->id]).'" type="button" class="btn btn-primary">Düzenle</a> 
                        <a href="'.route("admin.menu.destroy",["id"=>$menu->id]).'" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>
                        ';
            })
            ->make();

    }
}
