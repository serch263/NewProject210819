<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gmaps_geocache extends Model
{
    protected $table = 'gmaps_geocache';

    protected $fillable = [
        'address', 'latitude', 'longitude', 'id_user'
    ];
}
