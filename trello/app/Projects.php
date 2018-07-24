<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'project';
    protected $fillable = [
        'project_name',
    ];
}
