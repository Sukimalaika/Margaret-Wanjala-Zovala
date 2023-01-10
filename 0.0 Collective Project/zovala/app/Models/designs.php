<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    use HasFactory;
    //properties
    protected $table= "design";
    protected $primaryKey= "id";
    protected $fillable= ['name','base_price','gender','created_at,updated_at'];
    
    public function user_skills (){
        return $this ->belongsTo(user_skills::class);
    }
}
