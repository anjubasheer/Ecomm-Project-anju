<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;


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
    public function AddToCart(Request $req){
        if($req->session()->has('user')){
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/log');

        }
        else{
           return redirect('/login1');
        }
       
    }
    static function CartItem(){
        $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }

    public function loginProduct1()
    {
        $data= Product::all();
        return view('home', ['products'=>$data]);
    }
}
