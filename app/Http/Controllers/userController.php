<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }
    public function register(Request $req){
        $req->validate([
            "name"=>"required",
            "email"=> "required|email",
            "password"=> "required",
            "confirmpassword"=> "required|same:password",
        ]);
        echo "<pre>";
        print_r($req->all());
        $user = new User;
        $user->name = $req['name'];
        $user->email = $req['email'];
        $user->password = md5($req['password']);
        $user->save();
        return redirect('/userLists');
    }
    public function userLists(){
        $userLists = User::all();
        $data = compact('userLists');
        return view('userLists')->with($data);
    }
}
