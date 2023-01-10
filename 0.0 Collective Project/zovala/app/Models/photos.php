<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    //properties
    protected $table= "photos";
    protected $primaryKey= "id";
    protected $fillable= ['name','design_id','user_id','created_at,updated_at'];
    
    //relationships (Many)
    public function users (){
        return $this ->hasMany(User::class);
    }
}
