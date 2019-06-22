<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = ['user_id', 'progress1', 'progress2', 'progress3', 'progress4', 'progress5'];
}
