<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Kris\LaravelFormBuilder\FormBuilder;
use auth;



class AutorController extends Controller
{
use FormBuilderTrait;

public function __construct()
{
$this->middleware('auth', ['except' => ['index','show']]);
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
$autors = Autor::all();
return view('autor.index', compact(['autors']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
$editform = $this->form(\App\Http\Forms\EditAutorForm::class, [
        'url' => route('autor.update', $autor),
        'method' => 'PUT',
        'edit'=> true,
        'model' => $autor,
        'autor' => $autor,


]);




        return view('autor.show', compact(['autor','editform']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        //
$form = $this->form(\App\Http\Forms\EditAutorForm::class);
if(!$form->isValid())
{
return redirect()->back()->withErrors($form->getErrors())->withInput();


}

$autor->name=$request->name;
$autor->save();
return redirect(route('autor.show',$autor));





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
