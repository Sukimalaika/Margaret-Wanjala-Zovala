<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\Role;
class RoleController extends Controller
{
    //showing all roles
    public function all(){
    //call the Role model
      $allRoles=Role::paginate(7);
    //dumps and dies
       dd($allRoles);

       //pass data to view file
       return view('role.all',['role'=>$allRoles]);
    }
    //showing one roles 
    public function one(){} 
    //showing form to add a role(s)
    public function add(){
        return view('role.add');
    } 
    //process new role data
    public function save( Request $request){
        $request->validate([
            'role_name'=>'required|min:2|max:10|alpha'
        ]);
        $role_name=$request->get('role_name');
        $role= new Role();
        $role->name=$role_name;
        $role->save();
        return redirect('roles')->with('status',"$role_name role saved");
    } 
    //showing edit form
    public function edit($id){
        //echo 'edit method'; 
        $role=Role::find($id); 
        if($role)
        return view ('role.edit',['role' => $role]);     
        else
        return redirect ('roles');
    }
    //process edits
    public function saveChanges($id,Request $request ){
        //dd($id);
        $request->validate([
            'role_name'=>'required|min:2|max:10|alpha'
        ]);
        $role_name=$request->get('role_name');
        $role= Role::find($id);
        if($role){
            $role->name=$role_name;
            $role->save();
            return redirect('roles')->with('status',"Role $role_name updated");
        }       
        else{
            return redirect ('roles');
        }
    
    }
    //delete row from db
    public function delete($id){
        $role=Role::find($id);
        if ($role){
         $role->delete(); 
         return redirect('roles')->with('status',"Role deleted");  
        }
        else{
            return redirect('roles')->with('status',"Role does not exist"); 
        }
        //dd('here');
    }  
}
