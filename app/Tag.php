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

public static function checkCeros()
{
$ceros = Tag::doesntHave('memes')->delete();

}
}
