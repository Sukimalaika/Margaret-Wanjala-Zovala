<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;
    //properties
    protected $table= "county";
    protected $primaryKey= "id";
    protected $fillable= ['name','created_at,updated_at'];
    
    public function subCounty (){
        return $this ->hasMany(subCounty::class);
    }
    
    public function getNameAttribute($value){
        return ucwords($value);
     }
}
