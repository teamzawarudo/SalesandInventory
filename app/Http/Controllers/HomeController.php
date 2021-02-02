<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    public function home(){
        return view('home');
    }

    // public function login(){
    //     return view('login');
    // }

    // public function loginUser(Request $request){

    //     $username = $request->input('username');
    //     $password = $request->input('password');
        

    //     $select = DB::SELECT("SELECT * FROM useraccounts WHERE username = username and password = password", [$username, $password]);

    //     if($select == 0){
    //        return view('login'); 
    //     }
        
    // }

    // public function register(){
    //     return view('register');
    // }

    // public function registerUser(Request $request){

    //     $firstname = $request->input('firstname');
    //     $lastname = $request->input('lastname');
    //     $username = $request->input('username');
    //     $password = $request->input('password');
    //     $msg = "Please try again";

    //     $insert = DB::INSERT("INSERT INTO useraccounts(firstname, lastname, username, password) VALUES (?,?,?,?)", [$firstname, $lastname, $username, $password]);

    //     if($insert == TRUE){
    //         return view('login');
    //     }else{
    //         $msg;
    //     }


        
    // }











    //viewing the product page
    public function product(){

            $data = DB::SELECT("SELECT * FROM systemtable");
        

    	return view('product', ['products' => $data]);
    }

    public function addproduct(){
        return view('addproduct');
    }


    //inserting of products

    public function insertProduct(Request $request){

        $product_code = $request->input('productCode');
        $product_name = $request->input('productName');
        $product_quantity = $request->input('quantity');
        $product_price = $request->input('price');

        DB::INSERT("INSERT INTO systemtable(productCode, productName, quantity, price) 
            VALUES (?,?,?,?)", [$product_code, $product_name, $product_quantity, $product_price]);


        $data = DB::SELECT("SELECT * FROM systemtable");
        return view ('product', ['products' => $data]);



    }

//Editing Product
    public function editProduct($id){

        $data = DB::SELECT("SELECT * FROM systemtable WHERE id=?", [$id]);
        $isUpdate = "";
        return view('editproduct',['data' => $data, 'isUpdate' =>$isUpdate]);
    }

    public function updateProduct(Request $request, $id){
        $product_code = $request->input('productCode');
        $product_name = $request->input('productName');
        $product_quantity = $request->input('quantity');
        $product_price = $request->input('price');

        $isUpdate = DB::UPDATE("UPDATE systemtable SET productCode=?, productName=?, quantity=?, price=? WHERE id=?",
         [$product_code, $product_name, $product_quantity, $product_price, $id]);
        $data = DB::SELECT("SELECT * FROM systemtable WHERE id=?", [$id]);

         if ($isUpdate == 1 ) {
            $alert = "Record Updated";
        }else{
            $alert = "Record Not Updated";
        }


        return view('editproduct',['data' => $data, 'alert' =>$alert]);

    }


    public function deleteProduct($id){

        DB::DELETE("DELETE FROM systemtable WHERE id=?", [$id]);
        $data = DB::SELECT("SELECT * FROM systemtable");

        return view ('inventory', ['data' => $data]);
    }

















    public function inventory(){
        $data = DB::SELECT("SELECT * FROM systemtable");
    	return view('inventory', ['products' => $data]);
    }
    
    public function transaction(){
        $data = DB::SELECT("SELECT * FROM systemtable");
        return view('transaction', ['products' => $data]);
    }
}
