<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    protected $table = "bill_details";

    protected $fillable = [
        'bills_id', 'products_id', 'quantity', 'price',
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->belongsTo('App\Products', 'products_id', 'id');
    }

    public function bills()
    {
        return $this->belongsTo('App\Bills', 'bills_id', 'id');
    }
}
