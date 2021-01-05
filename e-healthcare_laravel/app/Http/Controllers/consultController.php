<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use File;

class consultController extends Controller
{
   public function index(Request $req)
   {
    $id = $req->session()->get('id');
    $name = $req->session()->get('username');

    if($id == NULL){
        return redirect()->route('login.index');
    }
    else{
        $user = User::where('type', 'doctor')
         ->get();
        return view('consult.index' ,compact('name' , 'id' , 'user'));
    }
   }

   public function create(Request $req){
    $department = $req->department;
    $date = $req->date;
    $time = $req->time;
    $doctor = $req->doctor;
    $user_id = $req->user_id;
    $book_date = date("Y-m-d H:i:s");
    $status = 'pending';

    //echo $department;
    //echo $doctor;
    //echo $user_id;
    //echo "<br>";
    //echo $date;
    //echo $time;

  /*   $json_data['department'] = $department;
    $json_data['doctor_id'] = $doctor;
    $json_data['date'] = $date;
    $json_data['time'] -> $time;
    $json_data['user_id'] -> $user_id;
    $json_data['book_date'] -> $book_date;
 */
/* $extra = array(  
    'department' => $department,  
    'date' => $date,  
    'time' => $time,  
    'doctor' => $doctor,  
    'user_id' => $user_id , 
    'book_date' => $book_date, 
    'status' => $status 
); */

    $file = 'pending_transaction.json';
    //$destinationPath=public_path()."/upload/json/";
    $destinationPath="../../json/";

    if(file_exists($destinationPath.$file)){
        $current_data = FILE::get($destinationPath.$file,true);
        $array_data = json_decode($current_data, true);

        $len = count($array_data);
        $last_id = $array_data[$len-1]['id'];
        $int_id =$last_id + 1;
        $new_id =(string)$int_id;
        
        
        
        //echo $new_id;
        //print_r($array_data[$len-2]['id']);


        /* foreach($array_data as $x => $val){
            if($val['doctor']==12){
                echo "ttt";
            }else{
                echo "fff";
            }
            print_r($val);
            print_r($val['time']);
        } */
        $extra = array(  
            'id' => $new_id,
            'vote' => '0',
            'vote_id' => '0',
            'department' => $department,  
            'date' => $date,  
            'time' => $time,  
            'doctor' => $doctor,  
            'user_id' => $user_id , 
            'book_date' => $book_date, 
            'status' => $status
            
        ); 
       $array_data[] = $extra;  
        $final_data = json_encode($array_data,JSON_PRETTY_PRINT); 
        FILE::put($destinationPath.$file, $final_data);
        $req->session()->flash('msg2', 'Consulting Requested Successfully');
        return redirect()->route('consult.index');
    }
    else{
        $extra = array(  
            'id' => '0',
            'vote' => '0',
            'vote_id' => '0',
            'department' => $department,  
            'date' => $date,  
            'time' => $time,  
            'doctor' => $doctor,  
            'user_id' => $user_id , 
            'book_date' => $book_date, 
            'status' => $status
        ); 
        $array_data[] = $extra;  
        $final_data = json_encode($array_data,JSON_PRETTY_PRINT);
        //$file = 'contract_code.json';
        //$destinationPath=public_path()."/upload/json/";

        if (!is_dir($destinationPath)) {  mkdir($destinationPath,0777,true);  }
        FILE::put($destinationPath.$file,stripslashes($final_data));
        $req->session()->flash('msg2', 'Consulting Requested Successfully');
        return redirect()->route('consult.index');
    }
   

    

   /* $array_data[] = $extra;  
   $final_data = json_encode($array_data); 

    $data = json_encode($extra , JSON_PRETTY_PRINT); */
    //echo $final_data;
   // print_r($extra);
  //  print_r($data);

    /*  $file = 'contract_code.json';
    $destinationPath=public_path()."/upload/json/";
    if (!is_dir($destinationPath)) {  mkdir($destinationPath,0777,true);  }
    FILE::append($destinationPath.$file,stripslashes($data)); */


    //return response()->download($destinationPath.$file);
 


   }
}
