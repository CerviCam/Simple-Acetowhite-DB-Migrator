<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V202002ImageLabel extends Model
{
    protected $table = 'v2020-02_image_labels';

    protected $fillable = [
        'filename',
        'email',
        'label',
        'comment',
    ];
}
