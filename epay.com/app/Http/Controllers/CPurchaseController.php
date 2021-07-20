<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer_balance;
use Validator;
use App\Http\Requests\CLoanRequest;
use App\Http\Requests\CRechargeRequest;
use App\Http\Requests\CElectricityBillRequest;

class CPurchaseController extends Controller
{
    public function index( Request $req){

        $name = "Nafi";
        $id = "123";

        //return view('customer.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('customer.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('customer.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('customer.customer', compact('id', 'name'));

    }

    public function show($id){

        $user = Customer_balance::find($id);
        //print_r($user);
        
        return view('customer.purchasedetails', compact('user'));
    }

    public function loanedit($id){
        
        $user = Customer_balance::find($id);
        return view('customer.loan')->with('user', $user);
    }


    public function loanupdate($id, CLoanRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = Customer_balance::find($id);

            $user->loanreq = $user->loanreq + $req->loanreq;

           /*  $user->loanreq = $user->loanreq +  $req->loanreq; */ //This is customer portion, my work.

            /* $user->balance = $user->balance +  $req->loan;
            $user->total_purchased = $user->total_purchased - $req->loan; */ //This is for admin portion, not my work.

            $user->username         = $req->username;
            $user->card_no          = $req->card_no;
            $user->bank_name        = $req->bank_name;       
            $user->loanreq          = $req->loanreq;
            $user->email            = $req->email;
            $user->phone            = $req->phone;
            $user->status           = $req->status;
            $user->profile_img      = $filename;

            $user->save();

            $req->session()->flash('msg', 'Customer amount for Loan is issued successfully...');
            return redirect()->route('customer.purchaselist');
    }

    }

    public function rechargeedit($id){
        
        $user = Customer_balance::find($id);
        return view('customer.recharge')->with('user', $user);
    }


    public function rechargeupdate($id, CRechargeRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = Customer_balance::find($id);

            $user->balance = $user->balance -  $req->mr;
            $user->total_purchased = $user->total_purchased + $req->mr;

            $user->username         = $req->username;
            $user->card_no          = $req->card_no;
            $user->bank_name        = $req->bank_name;       
            $user->mobile_recharge  = $req->mr;
            $user->email            = $req->email;
            $user->phone            = $req->phone;
            $user->profile_img      = $filename;
            $user->save();

            $req->session()->flash('msg', 'Customer amount for Mobile Recharge is purchased successfully...');
            return redirect()->route('customer.purchaselist');
    }

    }

    public function electricitybilledit($id){
        
        $user = Customer_balance::find($id);
        return view('customer.electricitybill')->with('user', $user);
    }


    public function electricitybillupdate($id, CElectricityBillRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = Customer_balance::find($id);

            $user->balance = $user->balance -  $req->eb;
            $user->total_purchased = $user->total_purchased + $req->eb;

            $user->username          = $req->username;
            $user->card_no           = $req->card_no;
            $user->bank_name         = $req->bank_name;       
            $user->electricity_bill  = $req->eb;
            $user->email             = $req->email;
            $user->phone             = $req->phone;
            $user->profile_img       = $filename;
            $user->save();

            $req->session()->flash('msg', 'Customer amount for Mobile Recharge is purchased successfully...');
            return redirect()->route('customer.purchaselist');
    }

    }

    public function list(Request $req){

        $value = $req->session()->get('username');
        $purchaselist = Customer_balance::where('username','=',$value)->get();   
        return view('customer.purchaselist')->with('list', $purchaselist);

        /* $userlist = User::all();
        return view('customer.list')->with('list', $userlist); */
    }

}
