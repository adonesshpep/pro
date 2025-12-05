<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function supplierOrders(){
        return $this->hasMany(SupplierOrder::class);
    }
    public function supplierInvoices(){
        return $this->hasMany(SupplierInvoice::class);
    }
}
