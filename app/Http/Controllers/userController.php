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
    public function create(Request $req){
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
        return redirect('userLists');
    }
    public function userLists(){
        $userLists = User::all();
        $data = compact('userLists');
        return view('userLists')->with($data);
    }
    public function edit($id, Request $req){
        
        $user = User::find($id);
        if(is_null($user)){
            return redirect('userLists');
        }else{
            
            return redirect('/')->back();
        };

    }
    public function delete($id){
        $user = User::find($id);
        if(!is_null($user)){
            $user->delete();
        };
        return redirect()->back();
    }
}
