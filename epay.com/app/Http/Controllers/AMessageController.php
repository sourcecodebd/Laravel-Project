<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Review;
use Validator;
use App\Http\Requests\AMessageRequest;
use App\Http\Requests\AMessageUpdateRequest;

class AMessageController extends Controller
{
    public function index( AMessageRequest $req){

        $name = "Nafi";
        $id = "123";

        //return view('admin.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('admin.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('admin.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('admin.admin', compact('id', 'name'));

    }

    public function show($id){

        $message = Message::find($id);
        //print_r($message);
        return view('admin.messagedetails')->with('message',$message);
    }
   

    public function edit($id){
        
        $message = Message::find($id);
        return view('admin.messageedit')->with('message', $message);
    }


    public function update($id, AMessageRequest $req){

        $message = Message::find($id);

        $message->admin_name     = $req->admin_name;
        $message->admin_message     = $req->admin_message;
        $message->save();

        $req->session()->flash('msg', 'Your Message has been edited...');
        return redirect()->route('admin.messagelist');
    }
    

    public function list(Request $req){
        
         $messagelist = message::all();
        return view('admin.messagelist')->with('list', $messagelist);
    }

    public function delete($id){

        $message = Message::find($id);
        return view('admin.messagedelete')->with('message', $message);
    }

    public function destroy($id, Request $req){

        if(Message::destroy($id)){
            $req->session()->flash('msg', 'Your Message has been deleted...');
            return redirect()->route('admin.messagelist');
        }else{
            return redirect('/E-Pay/home/delete/message/admin/'.$id);
        }

    }
    
    /* customer review */

    public function cshow($id){

        $review = Review::find($id);
        return view('admin.rdetails')->with('review', $review);
    }

    public function clist(Request $req){

        $name = Review::all();

        $value = $req->session()->get('username');
        $reviewlist = Review::where('username','=',$value)->get();   
        return view('admin.reviewlist')->with('list', $reviewlist)->with('name',$name);
    }

    

}
