<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;
    use HasFactory;
    //properties
    protected $table= "materials";
    protected $primaryKey= "id";
    protected $fillable= ['name','cost_metre','created_at,updated_at'];
    
    //belongsTo 
    public function design_materials (){
        return $this ->belongsTo(design_materials::class);
    }
}
