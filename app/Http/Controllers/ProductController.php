<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('dashboardLab.products', ['product' => $product]);
    }

    public function add(){
        $product = Product::all();
        return view('dashboardLab.add-product', ['product' => $product]);
    }

    public function store(Request $request){
        $pesan = [
            'required' => 'Kolom Wajib di isi',
            'mimes' => 'Format gambar harus PNG'
        ];
        $this->validate($request,[
            'name_product' => 'required',
            'des_product' => 'required',
            'category_id' => 'required',
            'price_before' => 'required',
            'foto_cover' => 'required|image|mimes:png,jpg,jpeg',
            'foto_1' => 'nullable|image|mimes:png,jpg,jpeg',
            'foto_2' => 'nullable|image|mimes:png,jpg,jpeg',
            'foto_3' => 'nullable|image|mimes:png,jpg,jpeg',
            'foto_4' => 'nullable|image|mimes:png,jpg,jpeg',
            'foto_5' => 'nullable|image|mimes:png,jpg,jpeg',
        ], $pesan);
        $name_product = ['name_product' => $request->name_product];

        //Foto Cover
        $foto_cover = $request->file('foto_cover');
        $extension = $request->file('foto_cover')->getClientOriginalExtension();
        $filenameSimpan_cover = 'fotocover_'.$name_product['name_product'].'.png'; 
        $path_id = $request->file('foto_cover')->storeAs('public/product', $filenameSimpan_cover);

        //Foto 1
       if($request->hasFile('foto_1')){
         $foto_1 = $request->file('foto_1');
        $extension = $request->file('foto_1')->getClientOriginalExtension();
        $filenameSimpan_1 = 'foto1_'.$name_product['name_product'].'.png'; 
        $path_id = $request->file('foto_1')->storeAs('public/product', $filenameSimpan_1);
       }else{
        $filenameSimpan_1 = NULL;
       }

        if($request->hasFile('foto_2')){
               //Foto 2
        $foto_2 = $request->file('foto_2');
        $extension = $request->file('foto_2')->getClientOriginalExtension();
        $filenameSimpan_2 = 'foto2_'.$name_product['name_product'].'.png'; 
        $path_id = $request->file('foto_2')->storeAs('public/product', $filenameSimpan_2);
       }else{
        $filenameSimpan_2 = NULL;
       }

        if($request->hasFile('foto_3')){
        //Foto 3
        $foto_3 = $request->file('foto_3');
        $extension = $request->file('foto_3')->getClientOriginalExtension();
        $filenameSimpan_3 = 'foto3_'.$name_product['name_product'].'.png'; 
        $path_id = $request->file('foto_3')->storeAs('public/product', $filenameSimpan_3);
       }else{
        $filenameSimpan_3 = NULL;
       }

        if($request->hasFile('foto_4')){
        //Foto 4
        $foto_4 = $request->file('foto_4');
        $extension = $request->file('foto_4')->getClientOriginalExtension();
        $filenameSimpan_4 = 'foto4_'.$name_product['name_product'].'.png'; 
        $path_id = $request->file('foto_4')->storeAs('public/product', $filenameSimpan_4);
        }else{
        $filenameSimpan_4 = NULL;
       }

        if($request->hasFile('foto_5')){
        //Foto 5
        $foto_5 = $request->file('foto_5');
        $extension = $request->file('foto_5')->getClientOriginalExtension();
        $filenameSimpan_5 = 'foto5_'.$name_product['name_product'].'.png'; 
        $path_id = $request->file('foto_5')->storeAs('public/product', $filenameSimpan_5);   
        }else{
        $filenameSimpan_5 = NULL;
       }

        Product::create([
            'user_id'=> request('user_id'), 
            'lab_id' => request('lab_id'),
            'name_product' => request('name_product'),
            'slug_product' => Str::slug(request('name_product')),
            'des_product' => request('des_product'),
            'category_id' => request('category_id'),
            'foto_cover' => $filenameSimpan_cover,
            'foto_1' => $filenameSimpan_1,
            'foto_2' => $filenameSimpan_2,
            'foto_3' => $filenameSimpan_3,
            'foto_4' => $filenameSimpan_4,
            'foto_5' => $filenameSimpan_5,
            'status_product' => request('status_product'),
            'price_before' => request('price_before'),
            'price_min' => $request->price_min,
            'price_max' => $request->price_max,
        ]);
        return redirect ()->route('products');
    }
}
