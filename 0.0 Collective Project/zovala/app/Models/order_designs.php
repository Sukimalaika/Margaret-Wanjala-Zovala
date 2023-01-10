<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_designs extends Model
{
    use HasFactory;
    //properties
    protected $table= "order_designs";
    protected $primaryKey= "id";
    protected $fillable= ['order_id','design_id','created_at,updated_at'];
    
        //relationships (Many)
        public function orders (){
            return $this ->hasMany(orders::class);
        }
}
