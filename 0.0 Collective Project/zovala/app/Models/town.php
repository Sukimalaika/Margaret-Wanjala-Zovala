<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
     //properties
     protected $table= "town";
     protected $primaryKey= "id";
     protected $fillable= ['name','lat_long','sc_id','created_at','updated_at'];
 
     //relationships (Many)
     public function subCounty (){
     return $this ->belongsTo(subCounty::class,'sc_id','id');
    }

    public function getNameAttribute($value){
        return ucwords($value);
     } 
}
