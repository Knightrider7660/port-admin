<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    protected $table = 'educations';
    protected $primaryKey = 'eduID';
    protected $fillable = ['name', 'institution','userID'];
}
