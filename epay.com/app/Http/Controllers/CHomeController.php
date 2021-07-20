<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\CustomerUpdateRequest;

class CHomeController extends Controller
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

        $user = Customer::find($id);
        //print_r($user);
        return view('customer.details')->with('user', $user);
    }

    public function create(){
        return view('customer.create');
    }

    public function store(CustomerRequest $req){

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

            $user = new Customer();
            $user->username     = $req->username;
            $user->password     = $req->password;
            $user->email        = $req->email;
            $user->name         = $req->name;
            $user->dob          = $req->dob;
            $user->father_name  = $req->father;
            $user->mother_name  = $req->mother;
            $user->gender       = $req->gender;
            $user->blood_group  = $req->blood;
            $user->address      = $req->addr;
            $user->phone       = $req->phone;
            $user->type         = $req->type;
            $user->nid_no       = $req->nid;
            $user->profile_img  = $filename;
            $user->save();

            $req->session()->flash('msg', 'Customer information created successfully...');
            return redirect()->route('customer.userlist');

        }  

    }

    public function edit($id){
        
        $user = Customer::find($id);
        return view('customer.edit')->with('user', $user);
    }


    public function update($id, CustomerUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Customer::find($id);

        $user->username     = $req->username;
        $user->password     = $req->password;
        $user->email        = $req->email;       
        $user->name         = $req->name;
        $user->dob          = $req->dob;
        $user->father_name  = $req->father;
        $user->mother_name  = $req->mother;
        $user->gender       = $req->gender;
        $user->blood_group  = $req->blood;
        $user->address      = $req->addr;
        $user->phone       = $req->phone;
        $user->type         = $req->type;
        $user->nid_no       = $req->nid;
        $user->profile_img  = $filename;
        $user->save();

        $req->session()->flash('msg', 'Customer information updated successfully...');
        return redirect()->route('customer.userlist');
    }

    }

    public function userlist(Request $req){

        $name = Customer::all();

        $value = $req->session()->get('username');
        $userlist = Customer::where('username','=',$value)->get();   
        return view('customer.list')->with('list', $userlist)->with('name',$name);

        /* $userlist = User::all();
        return view('customer.list')->with('list', $userlist); */
    }

    public function delete($id){

        $user = Customer::find($id);
        return view('customer.delete')->with('user', $user);
    }

    public function destroy($id, Request $req){

        if(Customer::destroy($id)){
            $req->session()->flash('msg', 'Customer account removed successfully...');
            return redirect()->route('logout.index');
        }else{
            return redirect('/E-Pay/home/delete/customer/'.$id);
        }

    }
}
