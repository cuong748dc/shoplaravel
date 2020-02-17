<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name', 'categories_id','price','quantity','description','image'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }

    public $timestamps = false;
}
