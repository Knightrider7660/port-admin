<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $primaryKey = 'aboutID';
    protected $fillable = ['position','descrption_1','descrption_2','imageName','userID'];

    public function user()
    {
        return $this->belongsTo('App\User','userID');
    }
}
