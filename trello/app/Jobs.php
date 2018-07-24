<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'job';
    protected $fillable = [
        'job_name',
    ];

    public function Pjuser()
    {
    	return $this->belongsTo(Pjuser::class);
    }
}
