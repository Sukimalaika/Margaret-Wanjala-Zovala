<?php

namespace App\Http\Controllers;
use App\Models\County;
use App\Models\SubCounty;
use App\Models\Town;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(){
        echo "<h1>Within the All method</h1>";
    }

    public function login(){
        return view('user.login');
    }

    public function register(){
        $counties = County::all();
        return view('user.register',['counties' => $counties]);
    }

    public function authRegister(Request $request){
        $request->validate([
            'surname' => 'required|alpha',
            'other_names' => 'required',
            'username' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'county' => 'required',
            'subcounty' => 'required',
            'town' => 'required',
            'password' => 'required',
        ]);
    }
}
