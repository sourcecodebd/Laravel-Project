<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Psy\Command\DumpCommand;
use App\Customer;
use Validator;
use App\Http\Requests\CustomerRequest;

class AcRefController extends Controller
{
        public function index(){
    
            return view('admin.customerRef');
            
        }
    
        
        public function store(CustomerRequest $req){ 
        
        
    
            if($req->hasFile('myfile')){
                $file = $req->file('myfile');  
                
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
            
            $req->session()->flash('msg', 'Customer Added successful! ');
            //return redirect()->route('admin.userlist');
        }
            
    }
    
    }