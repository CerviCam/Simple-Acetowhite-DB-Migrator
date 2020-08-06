<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V202001ImageAreaMark extends Model
{
    protected $table = 'v2020-01_image_area_marks';

    protected $fillable = [
        'filename',
        'rect_x0',
        'rect_y0',
        'rect_x1',
        'rect_y1',
        'label',
        'description',
    ];
}
