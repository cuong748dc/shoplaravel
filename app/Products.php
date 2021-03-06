<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'id', 'name', 'categories_id', 'price', 'quantity', 'description', 'image', 'promotion_price', 'sold'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }

    public function billDetails()
    {
        return $this->hasMany('App\BillDetails', 'products_id', 'id');
    }

    public $timestamps = false;
}
