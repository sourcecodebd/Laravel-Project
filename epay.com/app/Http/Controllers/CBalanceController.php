<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer_balance;
use Validator;
use App\Http\Requests\CBalanceRequest;
use App\Http\Requests\CCashInRequest;
use App\Http\Requests\CCashOutRequest;

class CBalanceController extends Controller
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
        return view('customer.balancedetails')->with('user', $user);
    }

    public function create(){
        return view('customer.balancecreate');
    }

    public function store(CBalanceRequest $req){

/*
        $this->validate($req, [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        /*$req->validate([
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        //$validation->validate();

        /*$validation = Validator::make($req->all(), [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ]);

        if($validation->fails()){
         //   return redirect()->route('customer.create')->with('errors', $validation->errors());

            return Back()->with('errors', $validation->errors())->withInput();            
        }*/

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = new Customer_balance();
            
            $user->balance = 0 +  $req->add; 

            $user->username         = $req->username;
            $user->card_no          = $req->card_no;
            $user->bank_name        = $req->bank_name;       
            $user->added            = $req->add;
            $user->email            = $req->email;
            $user->phone            = $req->phone;
            $user->profile_img      = $filename;

            $user->save();

            $req->session()->flash('msg', 'Customer Balance information created successfully...');
            return redirect()->route('customer.balancelist');

        }  

    }

    public function cashInedit($id){
        
        $user = Customer_balance::find($id);
        return view('customer.cashIn')->with('user', $user);
    }


    public function cashInupdate($id, CCashInRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = Customer_balance::find($id);

            $user->balance = $user->balance +  $req->add;

            $user->username         = $req->username;
            $user->card_no          = $req->card_no;
            $user->bank_name        = $req->bank_name;       
            $user->added            = $req->add;
            $user->email            = $req->email;
            $user->phone            = $req->phone;
            $user->profile_img      = $filename;

            $user->save();

            $req->session()->flash('msg', 'Customer Cash In is successful...');
            return redirect()->route('customer.balancelist');
    }

    }

    public function cashOutedit($id){
        
        $user = Customer_balance::find($id);
        return view('customer.cashOut')->with('user', $user);
    }


    public function cashOutupdate($id, CCashOutRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = Customer_balance::find($id);

            $user->balance = $user->balance -  $req->trans;

            $user->username         = $req->username;
            $user->card_no          = $req->card_no;
            $user->bank_name        = $req->bank_name;       
            $user->transferred      = $req->trans;
            $user->email            = $req->email;
            $user->phone            = $req->phone;
            $user->profile_img      = $filename;
            $user->save();

            $req->session()->flash('msg', 'Customer Cash Out is successful...');
            return redirect()->route('customer.balancelist');
    }

    }


    public function list(Request $req){

        $value = $req->session()->get('username');
        $balancelist = Customer_balance::where('username','=',$value)->get();   
        return view('customer.balancelist')->with('list', $balancelist);

        /* $userlist = User::all();
        return view('customer.list')->with('list', $userlist); */
    }

    public function delete($id){

        $user = Customer_balance::find($id);
        return view('customer.balancedelete')->with('user', $user);
    }

    public function destroy($id, Request $req){

        if(Customer_balance::destroy($id)){
            $req->session()->flash('msg', 'Customer Balance removed successfully...');
            return redirect()->route('customer.balancelist');
        }else{
            return redirect('/E-Pay/home/delete/balance/customer/'.$id);
        }

    }
}
