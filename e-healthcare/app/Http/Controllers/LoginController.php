<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
        
    	//echo $req->username;
    	//echo $req->password;
    	//$req->session()->put('name', $req->username);
    	//$req->session()->put('password', $req->password);
		//$data = $req->session()->get('name');
		//$req->session()->has('name');
    	//$req->session()->forget('name');
		//$req->session()->flush();
		//$req->session()->flash('msg', 'invalid username/password');
		//$req->session()->flash('error', 'DB error');
		//$req->session()->keep('msg');
		//$req->session()->reflash();
		//$data =$req->session()->pull('name');

        /*  $user = DB::table('users')
                    ->where('username', $req->username)
                    ->where('password', $req->password)
                    ->first(); */
                   
        $user = User::where('username', $req->username)
                   // ->where('password', $password)
                    ->first();

                        if($user == null){
                            $req->session()->flash('msg', 'invalid username/password');
                            return redirect('/login');

                        }else{

                            $hashedPassword = $user->password;
                            if(Hash::check($req->password, $hashedPassword)){
                                
                                $req->session()->put('username', $req->username);
                                //$req->session()->put('type', $req->username);
                                $req->session()->put('id', $user->id);
                                
                                return redirect()->route('home.index');
                            }else{
                                $req->session()->flash('msg', 'invalid username/password');
                                return redirect('/login');
                            }
                            
                            

                         }


                        /*$count = count($user->name);
                        echo $count; */
    	
    }
}
