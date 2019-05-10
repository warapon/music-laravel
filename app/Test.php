<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tests';

    protected $fillable = [
        'question',
        'choice1',
        'choice2',
        'choice3',
        'choice4',
        'answer',
        'unit_id'
    ];
}
