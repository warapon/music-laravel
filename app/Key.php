<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'key';

    protected $fillable = [
        'name_key',
        'intrument',
        'x',
        'y',
        'url_video',
        'sound',
        'img'
    ];
}
