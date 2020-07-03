<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ["company_name", "contact_name", "contact_title", "city", "country", "phone", "fax"];

    public function products()
    {
        return $this->hasMany("App\Product");
    }
}
