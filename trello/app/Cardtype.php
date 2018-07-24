<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardtype extends Model
{
    protected $table = 'cardtype';
    protected $fillable = [
        'name','card_type_id',
    ];
}
