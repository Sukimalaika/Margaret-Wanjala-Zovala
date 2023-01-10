<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    //properties
    protected $table= "payments";
    protected $primaryKey= "id";
    protected $fillable= ['user_id','amount','method','pdate','order_id','created_at,updated_at'];
    
    //relationship
    public function orders (){
        return $this ->hasMany(orders::class);
    }
}
