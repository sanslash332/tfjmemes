@extends('layouts.app')
@section('title')
autor: {{$autor->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                </div>

<h1> Memes dichos por {{$autor->name}} </h1>

@if(auth::check())
<button data-toggle="collapse" data-target="#formEditAutor">Editar nombre </button>

<div class="formContent collapse" id="formEditAutor">

<div class="formerrors" id="newuserserrors">
@if(count($errors)>0)
<ul>
@foreach($errors->all() as $error)
<li> {{$error}} </li>
@endforeach
</ul>
@endif
</div>

{!! form($editform) !!}

</div>
@endif

@each('meme.meme', $autor->memes, 'meme', 'meme.empty')



            </div>
        </div>
    </div>
</div>
@endsection
