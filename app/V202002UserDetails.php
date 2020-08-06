<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V202002UserDetails extends Model
{
    protected $table = 'v2020-02_users_details';

    protected $fillable = [
        'email',
        'is_administrator',
    ];
}
