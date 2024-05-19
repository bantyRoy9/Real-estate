<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(){
        return view('home');
    }
    public function signup(){
        return view('loginSign');
    }
}
