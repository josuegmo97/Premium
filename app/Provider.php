<?php

namespace premium;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'rif', 'company', 'direction', 'phone', 'email', 'service_id'
    ];
}
