<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class design_materials extends Model
{
    use HasFactory;
    //properties
    protected $table= "design_materials";
    protected $primaryKey= "id";
    protected $fillable= ['design_id','material_id','created_at,updated_at'];
    
    //relationship
    public function materials (){
        return $this ->hasOne(materials::class);
    }
}
