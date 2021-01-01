<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Patient;

use Illuminate\Support\Facades\Http;

class profileController extends Controller
{
    public function index($id){
       
        //HTTP request from node application
        $resp = Http::get('http://127.0.0.1:3000/data/'.$id);
        
        //echo $resp->body(['id']);
        $patient = json_decode($resp->body()); //parsing the json data
        //print_r($v->id);
        //$user = User::where('id', $id)->first();
        //$patient = Patient::where('user_id', $id)->first();
        //return view('profile.index')->with('user', $user)->with('patient', $patient);

        return view('profile.index')->with('patient', $patient);
    }
}
