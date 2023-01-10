<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\Design;
class designsController extends Controller
{
     
    public function all(){
        $alldesign=design::all();
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
