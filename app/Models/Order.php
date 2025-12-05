<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity','price')->withTimestamps();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function invoice(){
        return $this->hasOne(Invoice::class);
    }
    public function stockMovments(){
        return $this->hasMany(StockMovment::class);
    }
}
