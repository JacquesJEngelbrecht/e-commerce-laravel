<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product', ['products'=>$data]);
    }

     function detail($id){
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }

    function search(Request $request){
        $data = Product::where('name', 'like', '%'.$request->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }

    function addToCart(Request $request) {
        if($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            //notify()->success('Product added successfully!');
            return redirect('/'); 
        } else {
            //notify()->success('You need to be logged in to add to cart!');
            return redirect('/login');
        }
    }

    static function cartItem() {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    function cartlist() {
        $user_id = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $user_id)
        ->select('products.*', 'cart.id as cart_id')
        ->get();
        return view('cartlist', ['products'=>$products]);
    }

    function removeCart($id) {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow() {
        $user_id = Session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $user_id)
        ->sum('products.price');
        return view('ordernow', ['total'=>$total]);   
    }
}
