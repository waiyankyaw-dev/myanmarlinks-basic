<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["product_name", "supplier_id", "unit_price", "count"];

    public function supplier()
    {
        return $this->belongsTo("App\Supplier");
    }
}
