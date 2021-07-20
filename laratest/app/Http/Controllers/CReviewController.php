<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Validator;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\ReviewUpdateRequest;

class CReviewController extends Controller
{
    public function index( ReviewRequest $req){

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

        $review = Review::find($id);
        //print_r($review);
        return view('customer.reviewdetails')->with('review', $review);
    }

    
    public function create(){
        return view('customer.reviewcreate');
    }

    public function store(ReviewRequest $req){

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

            $review = new Review();

            $review->profile_img = $filename;
            $review->username   = $req->username;
            $review->reviewdate = $req->dor;
            $review->review     = $req->review;
            $review->feedback   = $req->feedback;
            $review->save();

        $req->session()->flash('msg', 'Your Review has been created...');
        return redirect()->route('customer.reviewlist');

        }  

    }

    public function edit($id){
        
        $review = Review::find($id);
        return view('customer.reviewedit')->with('review', $review);
    }


    public function update($id, ReviewRequest $req){

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

        $review = Review::find($id);

        $review->profile_img = $filename;
        $review->username   = $req->username;
        $review->reviewdate = $req->dor;
        $review->review     = $req->review;
        $review->feedback   = $req->feedback;
        $review->save();

        $req->session()->flash('msg', 'Your Review has been edited...');
        return redirect()->route('customer.reviewlist');
    }
    }
    

    public function list(Request $req){

        $name = Review::all();

        $value = $req->session()->get('username');
        $reviewlist = Review::where('username','=',$value)->get();   
        return view('customer.reviewlist')->with('list', $reviewlist)->with('name',$name);
        
        /* $reviewlist = Review::all();
        return view('customer.reviewlist')->with('list', $reviewlist); */
    }

    public function delete($id){

        $review = Review::find($id);
        return view('customer.reviewdelete')->with('review', $review);
    }

    public function destroy($id, Request $req){

        if(Review::destroy($id)){
            $req->session()->flash('msg', 'Your review has been deleted...');
            return redirect()->route('customer.reviewlist');
        }else{
            return redirect('/E-Pay/home/delete/review/customer/'.$id);
        }

    }


    /*public function getreviewlist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

}
