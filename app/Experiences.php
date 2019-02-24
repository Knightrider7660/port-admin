<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $table = 'experiences';
    protected $primaryKey = 'experienceID';
    protected $fillable = ['position', 'institution','userID'];
}
