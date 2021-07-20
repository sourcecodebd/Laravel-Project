<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ALogoutController extends Controller
{
    public function index(Request $req){

        $req->session()->flush();
        return redirect()->route('login.admin');
    }
}
