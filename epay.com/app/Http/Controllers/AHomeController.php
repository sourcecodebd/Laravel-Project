<?php

namespace App\Http\Controllers;
use App\Exports\customer_xl;
use App\Exports\customer_transition_xl;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Http\Request;
use App\Customer;
use App\Admin;
use App\Desk_manager;
use App\Service_provider;
use App\Customer_balance;
use Validator;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\LoanApRequest;
use App\Http\Requests\AdminUpdateRequest;

class AHomeController extends Controller
{
    public function index( Request $req){

       

       

        return view('admin.admin');

    }

    //xl download all customer

    public function export() 
    {
        return Excel::download(new customer_xl, 'customers.xlsx');
    }

    //xl download all customer transition
    public function exportbalance() 
    {
        return Excel::download(new customer_transition_xl, 'customers_transition.xlsx');
    }
      //pdf download single customer

      public function generatePDF(Request $request, $cid)
      {
         
  
          $data = Customer::find($cid);
          
        
          
          $pdf = \App::make('dompdf.wrapper');
          
  
              $html ='
              
              <h1 align=center> Customer '.$data->username.' Details</h1>';
              
              $html .='<table>
              
              <tbody>
                 
                  <tr>
                      <td >Name:</td>
                      <td>'.$data->username.'</td>
                  </tr>
                  <tr>
                      <td >Full Name:</td>
                      <td>'.$data->name.'</td>
                  </tr>
                  <tr>
                      <td >EMAIL:</td>
                      <td>'.$data->email.'</td>
                  </tr>
                  <tr>
                      <td >FATHER Name:</td>
                      <td>'.$data->father_name.'</td>
                  </tr>
                  <tr>
                      <td >MOTHER Name:</td>
                      <td>'.$data->mother_name.'</td>
                  </tr>
                  <tr>
                      <td >DATE OF BIRTH:</td>
                      <td>'.$data->dob.'</td>
                  </tr>
                  <tr>
                      <td >GENDER:</td>
                      <td>'.$data->gender.'</td>
                  </tr>
                  <tr>
                      <td >ADDRESS:</td>
                      <td>'.$data->address.'</td>
                  </tr>
                  <tr>
                      <td >MOBILE NUMBER:</td>
                      <td>'.$data->phone.'</td>
                  </tr>
                  <tr>
                      <td >NID NO:</td>
                      <td>'.$data->nid_no.'</td>
                  </tr>
                  <tr>
                      <td >BLOOD GROUP:</td>
                      <td>'.$data->blood_group.'</td>
                  </tr>
                  <tr>
                      <td >USER TYPE:</td>
                      <td>'.$data->type.'</td>
                  </tr>
              </tbody>
          </table>'; 
         
          
         
           $pdf->loadHTML($html);
          $filename = $data->username.'.pdf';
          return $pdf->download($filename);  
      }

   public function show($id){
    
        $user = Admin::find($id);
      
        return view('admin.details')->with('user', $user);

    }
     public function showcus($cid){

        $user = Customer::find($cid);
       return view('admin.details')->with('user', $user);
         
    } 
    public function showdesk($did){

        $user = Desk_manager::find($did);
       return view('admin.details')->with('user', $user);
         
    } 
    public function showservice($sid){

        $user =Service_provider::find($sid);
       return view('admin.details')->with('user', $user);
         
    } 
    public function create(){
        return view('admin.create');
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

            $req->session()->flash('msg', 'Admin information created successfully...');
            return redirect()->route('admin.userlist');

        }  

    }

    public function edit($id){
        
        $user = Admin::find($id);
        return view('admin.edit')->with('user', $user);
    }

    public function editC($cid){
        
        $user = Customer::find($cid);
        return view('admin.edit')->with('user', $user);
    }
    public function editD($did){
        
        $user = Desk_manager::find($did);
        return view('admin.edit')->with('user', $user);
    }
    public function editS($sid){
        
        $user = Service_provider::find($sid);
        return view('admin.edit')->with('user', $user);
    }

    public function update($id, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Admin::find($id);

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

        $req->session()->flash('msg', 'Admin information updated successfully...');
        return redirect()->route('admin.userlist');
    }

    }

    public function updateC($cid, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Customer::find($cid);

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
        return redirect()->route('admin.userlist');
    }

    }

    public function updateD($did, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Desk_manager::find($did);

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

        $req->session()->flash('msg', 'Desk Manager information updated successfully...');
        return redirect()->route('admin.userlist');
    }

    }

    public function updateS($sid, AdminUpdateRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
           
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $user = Service_provider::find($sid);

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

        $req->session()->flash('msg', 'Service Provider information updated successfully...');
        return redirect()->route('admin.userlist');
    }

    }

    public function userlist(Request $req){

        $name = Admin::all();
        $c    = Customer::all();
        $d    = Desk_manager::all();
        $s    = Service_provider::all();
        $l    = Customer_balance::all();

        $value = $req->session()->get('username');
        $userlist = Admin::where('username','=',$value)->get(); 
       // $userlist = Customer::where('username','=',$value)->get();   
        return view('admin.list')->with('list', $userlist)->with('name',$name)->with('c',$c)->with('d',$d)->with('s',$s)->with('l',$l);

    }

/*     public function list(Request $req){

        $name = Admin::all();

        $value = $req->session()->get('username');
        $userlist = Admin::where('username','=',$value)->get();   
        return view('admin.list')->with('list', $userlist)->with('name',$name);

    } */

    public function delete($id){

        $user = Admin::find($id);
        return view('admin.delete')->with('user', $user);
    }
    public function deleteC($cid){

        $user = Customer::find($cid);
        return view('admin.delete')->with('user', $user);
    }
    public function deleteD($did){

        $user = Desk_manager::find($did);
        return view('admin.delete')->with('user', $user);
    }
    public function deleteS($sid){

        $user = Service_provider::find($sid);
        return view('admin.delete')->with('user', $user);
    }


    public function destroy($id, Request $req){

        if(Admin::destroy($id)){
            $req->session()->flash('msg', 'Admin account removed successfully...');
            return redirect()->route('logout.index');
        }else{
            return redirect('/E-Pay/home/delete/admin/'.$id);
        }

    } 

    public function destroyC($cid, Request $req){


       // return $cid;
      /*  $c =Customer::find($cid)->get();
       $c->delete();
       return 'Customer account removed successfully...'; */
          if(Customer::destroy($cid)){
            $req->session()->flash('msg', 'Customer account removed successfully...');
            return redirect()->route('admin.userlist');
        }else{
            return redirect('/E-Pay/home/delete/customer/'.$cid);
        }  

    } 

    public function destroyD($did, Request $req){

        if(Desk_manager::destroy($did)){
            $req->session()->flash('msg', 'Desk Manager account removed successfully...');
            return redirect()->route('admin.userlist');
        }else{
            return redirect('/E-Pay/home/delete/deskManager/'.$did);
        }

    } 

    public function destroyS($sid, Request $req){

        if(Service_provider::destroy($sid)){
            $req->session()->flash('msg', 'Service Provider account removed successfully...');
            return redirect()->route('admin.userlist');
        }else{
            return redirect('/E-Pay/home/delete/serviceProvider/'.$sid);
        }

    }

    public function loanedit($lid){
        
        $user = Customer_balance::find($lid);
        return view('admin.loan')->with('user', $user);
    }
    
    public function loanupdate($lid, LoanApRequest $req){

     

        $user = Customer_balance::find($lid);

        //$user->loanreq = $user->loanreq + $req->loanreq;

        $user->loan = $req->loanreq + $user->loan;  //This is customer portion, my work.
        $user->balance = $user->balance +  $req->loanreq;
        $user->total_purchased = $user->total_purchased - $req->loanreq;  //This is for admin portion, not my work.

        //$user->username         = $req->username;     
        $user->loanreq          = 0;
        //$user->loan             = $req->loan;
        $user->status           = $req->status;
        $user->save();

        $req->session()->flash('msg', 'Customer amount for Loan is Approve successfully...');
        return redirect()->route('admin.userlist');
}

public function showl($lid){
    $l= Customer_balance::all();
    $user = Customer_balance::find($lid);
    //print_r($user);
    
    return view('admin.loandetails')->with('user', $user)->with('l',$l);
}

}
