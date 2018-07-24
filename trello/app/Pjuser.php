<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pjuser extends Model
{
    protected $table = 'pjuser';
    protected $fillable = [
        'user_name',
    ];
    public function Jobs()
    {
    	return $this->hasMany(Jobs::class);
    }
}
