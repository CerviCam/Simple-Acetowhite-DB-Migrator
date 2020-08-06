<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V202001ImageUpload extends Model
{
    protected $table = 'v2020-01_image_uploads';

    protected $fillable = [
        'filename_pre_iva',
        'path_pre_iva',
        'filename_post_iva',
        'path_post_iva',
        'posted_by',
        'edited_by',
        'label',
        'comment',
    ];
}
