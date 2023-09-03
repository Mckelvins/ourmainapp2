<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function home(){
        //imagine we loaded data from database
        $ourname ='kalvis';
        $animals = ['cow', 'cat', 'dog'];

        return view('home', ['allAnimals'=>$animals,'name'=>$ourname, 'catname' =>'Meavsalot']);
    }

    public function aboutPage(){
        return view('single-post');
    }

    public function welcome(){
        return view('welcome');
    }
}
