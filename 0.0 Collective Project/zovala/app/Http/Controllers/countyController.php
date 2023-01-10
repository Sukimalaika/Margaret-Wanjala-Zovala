<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\County;
class countyController extends Controller
{
     
    public function all(){
        $allcounty=county::all();
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
