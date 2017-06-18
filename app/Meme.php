<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Meme extends Model
{
    //
    

public function autors()
{
return($this->belongsToMany('App\Autor'));
}

public function tags()
{
return($this->belongsToMany('App\Tag'));
}
}
