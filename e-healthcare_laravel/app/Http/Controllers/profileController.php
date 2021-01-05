<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\Test_report;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Validator;
use File;

class profileController extends Controller
{
    public function index($id){
       
        //HTTP request from node application
        $resp = Http::get('http://127.0.0.1:3000/data/'.$id);
        
        //echo $resp->body(['id']);
        $patient = json_decode($resp->body()); //parsing the json data
        //print_r($v->id);
        $test_report = Test_report::where('user_id', $id)
        ->get();
        
        $file = 'pending_transaction.json';
        //$destinationPath=public_path()."/upload/json/";
        $destinationPath="../../json/";
    
        
        $current_data = FILE::get($destinationPath.$file,true);
        $array_data = json_decode($current_data, true);
        
        $payment = Payment::where('user_id', $id)
                    ->get();
        
       return view('profile.index')
       ->with('patient', $patient)
       ->with('t_r', $test_report)
       ->with('data', $array_data)
       ->with('payment', $payment);
    }
    public function edit($id){
        $resp = Http::get('http://127.0.0.1:3000/data/'.$id);
        $patient = json_decode($resp->body());
        return view('profile.edit')->with('patient', $patient);
    }


    public function update(Request $req , $id){ 
        $client = new Client();
        $resp = $client->request('POST', 'http://127.0.0.1:3000/data/'.$id, [
            'form_params' => [
                'contactno' => $req->contactno,
                'address' => $req->address,
                'bmi' => $req->bmi,
                'weight' => $req->weight,
                'bloodpressure' => $req->bloodpressure,
                'cal' => $req->cal
            ]
        ]);
        //echo $resp->status();
        $resp2 = Http::get('http://127.0.0.1:3000/data/'.$id);
        $patient = json_decode($resp2->body());
        $name = $patient->name;
        return view('home.index')->with('id' , $id)->with('name' , $name); 
    }


    public function edit_image($id){
        $resp = Http::get('http://127.0.0.1:3000/data/'.$id);
        $patient = json_decode($resp->body());
        return view('profile.edit_image')->with('patient', $patient);
    }


    public function update_image(Request $req , $id){
        $validation = Validator::make($req->all(), [
            'myimg' => 'required'
            ]);
        if($validation->fails()){
            return redirect()
                    ->route('profile.image' , $id)
                    ->with('errors', $validation->errors())
                    ->withInput();
        }
        if($req->hasFile('myimg')){

        	$file = $req->file('myimg');
        	if($file->move('upload', $file->getClientOriginalName())){
                //$user = new User();
                $user = User::find($id);
                $user->photo  = $file->getClientOriginalName();
                $user->save();
                
                return redirect()->route('home.index');     
            }else{
                return back();
            }
        }else{
            return back();
        }
        		
    }

    public function test_report($id){
        return view('profile.test_report');
    }


    public function add_test_report(Request $req , $id){
        $validation = Validator::make($req->all(), [
            'name' => 'required|min:3',
            'myimg' => 'required'
        ]);
        if($validation->fails()){
            return redirect()
                    ->route('profile.test_report', $id)
                    ->with('errors', $validation->errors());
        }
        if($req->hasFile('myimg')){

            $file = $req->file('myimg');
            
            if($file->move('upload', $file->getClientOriginalName())){
        		
                $photo = $file->getClientOriginalName();
                
                $client = new Client();
                $resp = $client->request('POST', 'http://127.0.0.1:3000/data/test_report/'.$id, [
                    'form_params' => [
                        'name' => $req->name,
                        'photo' => $photo
                    ]
                ]);
                $resp2 = Http::get('http://127.0.0.1:3000/data/'.$id);
                $patient = json_decode($resp2->body());
                $name = $patient->name;
                return view('home.index')->with('id' , $id)->with('name' , $name);
            }else{
                    return back();
                }
        }
        else{
            return back();
        }

    }

    public function show_payment($user_id ,$id){
        return view('payment.index')->with('user_id' , $user_id)->with('id' , $id);
    }

    public function add_payment(Request $req , $id){
       
        $payment = new Payment();
                
        $payment->gateway = $req->gateway;
        $payment->date = $req->date;
        $payment->status = $req->status;
        $payment->user_id = $req->user_id;
        $payment->list_id = $req->list_id;

        $payment->save();

        return redirect()->route('home.index'); 

    }

}
