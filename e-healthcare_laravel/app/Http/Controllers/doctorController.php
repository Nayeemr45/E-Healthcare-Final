<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class doctorController extends Controller
{
    public function index(Request $req){
       
            $type = "doctor";
            $data = DB::table('users')
           // ->select('users.name' , 'doctors.dob')
            ->join('doctors' , 'users.id' , 'doctors.user_id')
            ->where('users.type' , 'doctor')
            ->get();
            //return view('doctor.index', compact('name' , 'id'));
            return view('doctor.index')->with('doctor', $data);
        
    }


    public function search(Request $req){
        if($req->ajax()){
            $q = $req->search;
            $data = DB::table('users')
            ->join('doctors' , 'users.id' , 'doctors.user_id')
            ->where('users.name' , 'like' , '%'.$q.'%')
            ->get();
            return response()->json($data);
        }
        
        /* $type = "doctor";
        $data = DB::table('users')
        ->join('doctors' , 'users.id' , 'doctors.user_id')
        ->where('users.type' , 'doctor')
        ->where('users.name' , $req->search)
        ->get();
        //return view('doctor.index', compact('name' , 'id'));
        return view('doctor.index')->with('doctor', $data); */
    }
}
