<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="This is the UTM TRL_CALCULATOR";
        return view('welcome', compact('title')) ; 
    }

    public function admin(){
       $data = array(
           'title' => 'Admin HOME',
           'admin' => ['Home page','Student List']
       );
       return view ('admin.admin_home')->with($data);
       
       
        // return view('admin.admin_home') ; 
    }
    
    public function studentlist(){
        return view('admin.admin_studentlist');
    }


    public function registration(){
        return view('student.registration') ; 
    }
    
    public function studenthome(){
        return view('student.student_home') ; 
    }

    public function login(){
        return view('login') ; 
    }

    public function view(){
        return view('view') ; 
    }

    public function edit(){
        return view('edit') ; 
    }


}
