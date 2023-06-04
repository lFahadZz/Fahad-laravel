<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\User;

class ComputersController extends Controller
{
    public function topProducts(){

        $products = DB::table('products')->take(3)->get();

        return view('index', ['products'=>$products]);
    }
    public function products(){

        $products = DB::table('products')->get();

        return view('store', ['products'=>$products]);
    }

    public function productDetails($id){

        $product = DB::table('products')
            ->where('id', $id)
            ->first();

        return view('product-details', ['product'=>$product]);
    }
   

      //user details 
      public function userDetails($id)
      
      {
          // Get the user information from the database
          $product = DB::table('users')
          ->find($id)
          ->where('id', $id)
          ->first();
          // Return the user information to the view
      
          // Return the user information to the view
          return view('profile', ['product'=>$product]);

          
      }
      

     
        

    public function addToCart($id){

        $product = DB::table('products')
            ->where('id', $id)
            ->first();

        return view('cart', ['product'=>$product]);
    }

    public function checkout($id){

        $product = DB::table('products')
            ->where('id', $id)
            ->first();

        return view('checkout', ['product'=>$product]);
    }

    public function invoice(Request $request){
        if ($request->isMethod('post')) {
            $row = [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'country'=>$request->country,
                'city'=>$request->city,
                'product_name'=>$request->productName,
                'price'=>$request->price
            ];

            $id = DB::table('invoice')->insertGetId($row);

            $invoice = DB::table('invoice')->find($id);

            $date = Carbon::now()->toDateString();
            $tax = (15 / 100) * $request->price;

            return view('invoice', ['invoice'=>$invoice, 'tax'=>$tax, 'date'=>$date]);
        }
   }
    
}
