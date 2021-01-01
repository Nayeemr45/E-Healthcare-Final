<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
        $id = $req->session()->get('id');
        $name = $req->session()->get('username');
        return view('home.index', compact('name' , 'id'));
    }
}
