<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    protected $table = 'favorite';
    protected $fillable=[
        'fid',
        'mid',
        'rid',
    ];
}
