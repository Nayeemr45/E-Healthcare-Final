<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class blogController extends Controller
{
    public function index(Request $req)
    {
        $id = $req->session()->get('id');
        $name = $req->session()->get('username');

        if($id == NULL){
            return redirect()->route('login.index');
        }
        else{
            $blog = Blog::get();
            return view('blog.index')->with('blog' , $blog);
        }
    }
}
