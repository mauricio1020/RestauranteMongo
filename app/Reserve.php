<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Reserve extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        "number_table",
        "restaurant_id",
        "date",
    ];

    protected $casts = [
        "date" => "date",
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
