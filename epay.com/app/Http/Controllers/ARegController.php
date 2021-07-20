<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Command\DumpCommand;
use App\Admin;
use Validator;
use App\Http\Requests\AdminRequest;

class ARegController extends Controller
{
    public function index(){

        return view('registration.admin');
        
    }

    
    public function store(AdminRequest $req){ 
    
    

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            
            $filename = time().".".$file->getClientOriginalExtension();

            $file->move('upload', $filename);

            $user = new Admin();
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
        
        $req->session()->flash('msg', 'Registration is successful! Please login...');
        return redirect()->route('login.admin');
    }
        
}

}
