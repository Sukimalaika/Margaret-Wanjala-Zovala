<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\town;
class townController extends Controller
{
     
    public function all(){
        $alltown=town::all();
      //dumps and dies
         dd();
      }
      public function one(){} 
      public function add(){} 
      public function save(){} 
      public function edit(){}
      public function saveChanges(){}
      public function delete(){}  
}
