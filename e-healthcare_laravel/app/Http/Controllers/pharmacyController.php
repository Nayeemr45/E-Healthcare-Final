<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class pharmacyController extends Controller
{
    public function index(Request $req){
        $id = $req->session()->get('id');
        $name = $req->session()->get('username');

        if($id == NULL){
            return redirect()->route('login.index');

        }
        else{
            $type = "doctor";
            $data = Medicine::get();
            //return view('doctor.index', compact('name' , 'id'));
            return view('pharmacy.index')->with('medicine', $data);
        }
    }
    
    public function search(Request $req){
        if($req->ajax()){
            $q = $req->search;
            $data = Medicine::where('name' , 'like' , '%'.$q.'%')
            ->get();
            return response()->json($data);
        }
    }
}
