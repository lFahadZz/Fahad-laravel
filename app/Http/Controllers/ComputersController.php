<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\User;
class ComputersController extends Controller
{

    
    
    public function products(){
        
        $products = DB::table('products')->get();
        
        
        return view('store', ['products'=>$products]);
    }
    public function phone(){

        $phone = DB::table('phones')->get();

        return view('phone', ['phone'=>$phone]);
  
    }
    public function computer(){

        $computer = DB::table('computers')->get();

        return view('computer', ['computers'=>$computer]);
    }
    public function productid() {
        // Check if the user has selected a product
        if (isset($products) && $products == "yes") {
          // Get the products from the database
          $products = DB::table('products')->get();
      
          // Return the view with the products data
          return view('store', compact('products'));
        } else {
          // Get the phones from the database
          $phone = DB::table('phones')->get();
      
          // Return the phone view
          return view('phone', compact('phone'));
        }
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

    public function checkout_laptops($id){

        $products = DB::table('products')
            ->where('id', $id)
            ->first();

        return view('checkouts\checkout-laptops', ['product'=>$products]);
    }
    public function checkout_phones($id){

        $phone = DB::table('phones')
            ->where('id', $id)
            ->first();

        return view('checkouts/checkout-phones', ['phones'=>$phone]);
    }
    public function checkout_computers($id){

        $computer = DB::table('computer')
            ->where('id', $id)
            ->first();

        return view('checkouts/checkout-computers', ['computers'=>$computer]);
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
