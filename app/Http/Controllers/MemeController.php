<?php

namespace App\Http\Controllers;

use App\Meme;
use Illuminate\Http\Request;
use App\Autor;
use App\Tag;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Kris\LaravelFormBuilder\FormBuilder;
use auth;


class MemeController extends Controller
{
use FormBuilderTrait; 

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newform = $this->form(\App\Http\Forms\NewMemeForm::class, [
        'url' => route('meme.store'),
        'method' => 'POST',

]);


return view('meme.newmeme', compact(['newform']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form = $this->form(\App\Http\Forms\NewMemeForm::class);
if(!$form->isValid())
{
return redirect()->back()->withErrors($form->getErrors())->withInput(); 
}

$meme = new Meme();
$meme->content = $request->content;
$meme->save();

$tags = explode(',', trim($request->tags));
$autors = explode(',', trim($request->autors));
foreach($tags as $t)
{
$ts = Tag::where('title', $t)->get();
if(count($ts)>0)
{
$meme->tags()->attach($ts[0]->id);
}
else
{
$tag = new Tag();
$tag->title= $t;
$tag->save();
$meme->tags()->attach($tag->id);


}
}

foreach($autors as $a)
{
$as = Autor::where('name', $a)->get();
if(count($as)>0)
{
$meme->autors()->attach($as[0]->id);

}
else
{
$autor = new Autor();
$autor->name=$a;
$autor->save();
$meme->autors()->attach($autor->id);


}

}

$meme->save();

return redirect('/home');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meme  $meme
     * @return \Illuminate\Http\Response
     */
    public function show(Meme $meme)
    {
        //
return view('meme.show', compact(['meme']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meme  $meme
     * @return \Illuminate\Http\Response
     */
    public function edit(Meme $meme)
    {
        //

$newform = $this->form(\App\Http\Forms\NewMemeForm::class, [
        'url' => route('meme.update', $meme),
        'method' => 'PUT',
        'edit'=> true,
        'model' => $meme,
        'meme' => $meme,


]);


return view('meme.edit', compact(['newform']));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meme  $meme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meme $meme)
    {
        //

$form = $this->form(\App\Http\Forms\NewMemeForm::class);
if(!$form->isValid())
{
return redirect()->back()->withErrors($form->getErrors())->withInput(); 
}


$meme->content = $request->content;
$meme->save();

$meme->tags()->detach();
$meme->autors()->detach();

$tags = explode(',', trim($request->tags));
$autors = explode(',', trim($request->autors));
foreach($tags as $t)
{
$ts = Tag::where('title', $t)->get();
if(count($ts)>0)
{
$meme->tags()->attach($ts[0]->id);
}
else
{
$tag = new Tag();
$tag->title= $t;
$tag->save();
$meme->tags()->attach($tag->id);


}
}

foreach($autors as $a)
{
$as = Autor::where('name', $a)->get();
if(count($as)>0)
{
$meme->autors()->attach($as[0]->id);

}
else
{
$autor = new Autor();
$autor->name=$a;
$autor->save();
$meme->autors()->attach($autor->id);


}

}

$meme->save();

Tag::checkCeros();
Autor::checkCeros();

return redirect(route('meme.show',
$meme));





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meme  $meme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meme $meme)
    {
        //
$meme->autors()->detach();
$meme->tags()->detach();
$meme->delete();			
Tag::checkCeros();
Autor::checkCeros();
return redirect('/home');





    }
}
