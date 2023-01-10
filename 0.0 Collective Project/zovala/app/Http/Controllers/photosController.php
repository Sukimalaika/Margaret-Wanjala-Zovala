<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\Photo;
class photosController extends Controller
{
     
    public function all(){
        $allphoto=photo::all();
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
