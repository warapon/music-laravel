<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruments extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'instruments';

    protected $fillable = [
        'instument_type_has_instuments',
        'name_th_inst',
        'name_en_inst',
        'detail_inst',
        'url_inst',
        'img_inst',
        'img_pro'
    ];
}
