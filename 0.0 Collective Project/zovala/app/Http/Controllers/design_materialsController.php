<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\design_materials;
class design_materialsController extends Controller
{
     
    public function all(){
        $alldesign_materials=design_materials::all();
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
