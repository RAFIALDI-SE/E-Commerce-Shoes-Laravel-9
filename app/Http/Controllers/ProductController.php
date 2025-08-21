<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Echo_;

class ProductController extends Controller
{


    //
    public function create_view(){
        return view('create_view');
    }

    public function add_product(Request $request){

         $image = 'img-'.time().'.'.$request->image->extension();
         $request->image->move(public_path('gambar'), $image);
 
         $product = new Product();
         $product->name = $request->name;
         $product->price = $request->price;
         $product->stock = $request->stock;
         $product->description = $request->description;
         $product->image = $image;
         $product->save();

        return Redirect::route('all_product');

    }

    public function all_product(){
        $products = Product::latest()->get();
        return view('all_product', compact('products'));
    }

   

    public function edit_view($id){
        $products = Product::where('id', '=', $id)->first();
        return view('edit_view', compact('products'));

    }

    public function edit_data(Request $request, $id)
{
    $product = Product::where('id', '=', $id)->first();

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        // Hapus gambar lama jika ada
        $filePath = public_path('gambar/' . $product->image);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Simpan gambar baru
        $image = 'img-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('gambar'), $image);
        $product->image = $image;
    }

    // Update data lain
    $product->name = $request->name;
    $product->price = $request->price;
    $product->stock = $request->stock;
    $product->description = $request->description;
    $product->save();

    return Redirect::route('all_product');
}

    

    public function delete_product($id){
        Product::where('id', '=', $id)->delete();
        return Redirect::route('all_product');

    }

}