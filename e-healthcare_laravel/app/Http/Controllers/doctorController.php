<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class doctorController extends Controller
{
    public function index(Request $req){
        $id = $req->session()->get('id');
        $name = $req->session()->get('username');

        if($id == NULL){
            return redirect()->route('login.index');

        }
        else{
            $type = "doctor";
            $data = DB::table('users')
           // ->select('users.name' , 'doctors.dob')
            ->join('doctors' , 'users.id' , 'doctors.user_id')
            ->where('users.type' , 'doctor')
            ->get();
            
           /*  print_r($data);
            echo "<br>";
            echo "<br>";
            echo "<br>";
            foreach($data as $x => $val) {
                echo "$x = $val->user_id<br>";
            } */

            /* $user = User::where('type', $type)
            // ->where('password', $password)
             ->get();
            foreach($user as $x => $val) {
                echo "$x = $val->id<br>";
            }
             //print_r($user);
             $doctor = Doctor::where('user_id', $user[0]['id'])
             // ->where('password', $password)
              ->get(); */
              //print_r($doctor[0]['dob']);

            //return view('doctor.index', compact('name' , 'id'));
            return view('doctor.index')->with('doctor', $data);
        }
    }
}
