<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument_Type extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'instument_type';

    protected $fillable = [
        'name'
    ];

    
}
