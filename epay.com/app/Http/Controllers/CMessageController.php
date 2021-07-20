<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Validator;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\MessageUpdateRequest;

class CMessageController extends Controller
{
    public function index( MessageRequest $req){

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

        $message = Message::find($id);
        //print_r($message);
        return view('customer.messagedetails')->with('message',$message);
    }
    
    public function create(){
        return view('Main');
    }

    public function store(MessageRequest $req){

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

        $message = new Message();

        $message->profile_img = $filename;
        $message->username    = $req->username;
        $message->messagedate = $req->dom;
        $message->subject     = $req->subject;
        $message->message     = $req->message;
        $message->save();

        $req->session()->flash('msg', 'Your Message has been sent to admin...');
        return redirect()->route('main.index');

        }  

    }

    public function edit($id){
        
        $message = Message::find($id);
        return view('customer.messageedit')->with('message', $message);
    }


    public function update($id, MessageRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $message = Message::find($id);

        $message->profile_img = $filename;
        $message->username    = $req->username;
        $message->messagedate = $req->dom;
        $message->subject     = $req->subject;
        $message->message     = $req->message;
        $message->save();

        $req->session()->flash('msg', 'Your Message has been edited...');
        return redirect('/E-Pay/home/edit/message/customer/'.$id);
    }
    }
    

    public function list(Request $req){

        $value = $req->session()->get('username');
        $messagelist = Message::where('username','=',$value)->get();   
        return view('customer.messagelist')->with('list', $messagelist);
        
        /* $messagelist = message::all();
        return view('customer.messagelist')->with('list', $messagelist); */
    }

    public function delete($id){

        $message = Message::find($id);
        return view('customer.messagedelete')->with('message', $message);
    }

    public function destroy($id, Request $req){

        if(Message::destroy($id)){
            $req->session()->flash('msg', 'Your Message has been deleted...');
            return redirect()->route('customer.messagelist');
        }else{
            return redirect('/E-Pay/home/delete/message/customer/'.$id);
        }

    }


    /*public function getmessagelist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

}
