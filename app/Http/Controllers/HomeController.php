<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->take(6)->get();
        $user = Auth::user();
        return view('home_view', compact('products', 'user'));
    }


    public function home_view_all_product(Request $request)
    {

        if(isset($request->search)){
            $products = Product::when($request->search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })->latest()->get();
        }else{

            $products = Product::all();
        }

        return view('home_view_all_product', compact('products'));
    }



    public function home_view_detail($id){
        $products = Product::where('id', '=', $id)->first();
        return view('home_view_detail', compact('products'));
    }




}
