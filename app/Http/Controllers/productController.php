<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    //
    public function loginProduct()
    {
        $data= Product::all();
        return view('product', ['products'=>$data]);
    }
    public function prodetail($id)
    {
        $data= Product::find($id);
        return view('prodetail',['product'=>$data]);
    }
    public function search(Request $req){
       
       $data= Product::where('name', 'like', '%'.$req->input('query').'%')->get();
       return view('search',['products'=>$data]);

    }
}
