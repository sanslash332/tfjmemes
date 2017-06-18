<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

public function memes()
{
return($this->belongsToMany('App\Meme'));
}
}
