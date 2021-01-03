<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Auth;

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


    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(Request $req)
    {
        $data = Socialite::driver('facebook')->stateless()->user();
        
        //dd($user);
        //$this->_registerOrLoginUser($user );

        // Return home after login
       //return redirect()->route('home.index');
       $check = User::where('email', $data->email)->first();
       if (!$check) {
           $user = new User();
           $user->name = $data->name;
           $user->username = '';
           $user->password = '';
           $user->photo = '';
           $user->contactno = '';
           $user->email = $data->email;
           $user->type = 'patient';
           $user->remember_token = $data->id;
           $user->save();
           $patient = new Patient();
           $patient->dob = '';
           $patient->address = '';
           $patient->bloodgroup = '';
           $patient->bmi = '';
           $patient->weight = '';
           $patient->bloodpressure = '';
           $patient->cal = '';
           $patient->user_id = $user->id;;
           $patient->save();

           
            $req->session()->put('username', $user->name);
                                //$req->session()->put('type', $req->username);
            $req->session()->put('id', $user->id);
                                
            return redirect()->route('home.index');
           //Auth::login($user);
           //return redirect()->route('home.index')->with('id' , $check->id)->with('name' , $check->name);
       }else{
        //Auth::login($check);
        
        $req->session()->put('username', $check->name);
        //$req->session()->put('type', $req->username);
        $req->session()->put('id', $check->id);
        
        return redirect()->route('home.index');
        //return redirect()->route('home.index')->with('id' , $check->id)->with('name' , $check->name);
       }



    }
    /* protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->username = '';
            $user->password = '';
            $user->photo = '';
            $user->contactno = '';
            $user->email = $data->email;
            $user->type = 'patient';
            $user->remember_token = $data->id;
            $user->save();
           
        }
        
        Auth::login($user);
    } */

}
