<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    //properties
    protected $table= "ratings";
    protected $primaryKey= "id";
    protected $fillable= ['user_id','value','comment','order_id','created_at,updated_at'];
    
    public function orders (){
        return $this ->hasMany(orders::class);
    }
}
