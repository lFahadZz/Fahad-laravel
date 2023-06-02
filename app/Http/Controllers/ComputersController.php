<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComputersController extends Controller
{
    //  public function invoic(request $request){
    
    //     $Computers = $request->input('Computers');
    //     $Computers = DB::table('Computerss')->where('Computers', $Computers)->first();
    //     if($Computers){
    //         return response()->json([
    //             'status' =>'success',
    //             'message' => 'Computers is available',
    //             'data' => $Computers
    //             ]);
    //             }else{
    //                 return response()->json([
    //                     'status' =>'error',
    //                     'message' => 'Computers is not available',
    //                     'data' => $Computers
    //                     ]);
    //                     }

     
        public function CheckOut($id){
        $Computers=DB::table('product')->where('id','=',$id)
        ->first();
        return view('Checkout',['Computers'=>$Computers]);
        }   
    public function ComputerType(){
     $Computers= DB::table('product')->get();

        return view('Computers',['Computers'=>$Computers]);
    }

}
