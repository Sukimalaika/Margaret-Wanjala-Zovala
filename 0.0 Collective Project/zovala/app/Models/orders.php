<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
        //properties
        protected $table= "orders";
        protected $primaryKey= "id";
        protected $fillable= ['customer','quantity','price','received','completed','amount_paid','tailor','preferred_date','occassion','details','created_at','updated_at'];
    
       //belongsTo 
    public function user (){
        return $this ->hasMany(user::class);
    }
}
