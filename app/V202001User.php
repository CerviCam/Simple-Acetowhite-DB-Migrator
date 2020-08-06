<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class V202001User extends Model
{
    protected $table = 'v2020-01_users';

    protected $fillable = [
        'email',
        'name',
    ];
}
