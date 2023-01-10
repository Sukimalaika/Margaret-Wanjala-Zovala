<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\order_designs;
class order_designsController extends Controller
{
  
    public function all(){
        $allorder_designs=order_designs::all();
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
