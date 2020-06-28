<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function profit()
    {
        return $this->belongsTo('App\Models\Profit', 'product_id', 'id');
    }
}
