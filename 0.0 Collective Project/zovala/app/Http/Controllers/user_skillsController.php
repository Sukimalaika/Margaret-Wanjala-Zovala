<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\user_skills;
class user_skillsController extends Controller
{
    
    public function all(){
          $alluser_skills=user_skills::all();
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
