<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function index(Request $req)
    {
        $id = $req->session()->get('id');
        $name = $req->session()->get('username');

        if($id == NULL){
            return redirect()->route('login.index');
        }
        else{
           
            return view('appointment.index');
        }
    }
}
