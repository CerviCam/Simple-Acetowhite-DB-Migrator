<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V202002ImageAreaMark extends Model
{
    protected $table = 'v2020-02_image_area_marks';

    protected $fillable = [
        'filename',
        'email',
        'rect_x0',
        'rect_y0',
        'rect_x1',
        'rect_y1',
        'label',
        'description',
    ];
}
