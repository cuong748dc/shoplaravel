<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = "bills";

    protected $fillable = [
        'users_id', 'date_order', 'total', 'user_address',
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }

    public function details()
    {
        return $this->hasMany('App\BillDetails', 'bills_id', 'id');
    }

}
