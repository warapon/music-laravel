<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'note';

    protected $fillable = [
        'name_note',
        'detail_note'
    ];
}
