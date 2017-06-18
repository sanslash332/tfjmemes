<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meme;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Kris\LaravelFormBuilder\FormBuilder;
use auth;


class HomeController extends Controller
{
use FormBuilderTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $memes = Meme::all();
if($memes->count() > 0)
{
$i = rand(0,count($memes)-1);
$randommeme = $memes[$i];

}
else
{
$randommeme = new Meme();
$randommeme->content = "El perro ql no ha subido memes";
}


        return view('home', compact(['randommeme', 'memes']));

    }

public function nuevoMeme()
{

}

public function saveMeme(Request $request)
{

}

}
