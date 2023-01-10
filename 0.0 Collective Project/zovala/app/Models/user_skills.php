<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_skills extends Model
{
    use HasFactory;
    //properties
    protected $table= "user_skills";
    protected $primaryKey= "id";
    protected $fillable= ['user_id','design_is','order_id','created_at,updated_at'];
    
    //relationship
    public function designs (){
        return $this ->hasMany(designs::class);
    }
public function users (){
    return $this ->hasMany(users::class);
}
}