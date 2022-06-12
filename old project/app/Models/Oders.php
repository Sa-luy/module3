<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Oders extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class ,'user_id','user_id');
    }
    public function order_detail(){
        return $this->hasOne(Order_detail::class ,'order_id','id');
    }
}