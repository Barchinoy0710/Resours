<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage(){
        return view('index'); 
    }
    public function umumiyPage(){
        return view("umumiy");
    }
    
    public function profilPage(){
        return view("profil"); 
    }
        
}
