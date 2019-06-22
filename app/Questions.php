<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = ['question', 'answer1', 'comment1', 'answer2', 'comment2', 'answer3', 'comment3', 'answer4', 'comment4', 'answer5', 'comment5', 'level'];
}
