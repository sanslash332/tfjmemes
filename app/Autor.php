<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    //

public function memes()
{
return($this->belongsToMany('App\Meme'));

}

public static function checkCeros()
{
$ceros = Autor::doesntHave('memes')->delete();

}
}
