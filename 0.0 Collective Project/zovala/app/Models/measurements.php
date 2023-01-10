<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurements extends Model
{
    use HasFactory;
    //properties
    protected $table= "measurements";
    protected $primaryKey= "id";
    protected $fillable= ['collar','chest','sleeve','waist','hips','inseam','outseam','user_id','created_at','updated_at'];

      //relationships (Many)
      public function users (){
        return $this ->hasMany(User::class);
    }
}

