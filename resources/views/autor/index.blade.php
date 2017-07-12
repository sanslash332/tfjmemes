@extends('layouts.app')
@section('title')
autores
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                </div>

<h1> lista de autores </h1>

<p> En total hay {{count($autors)}} autores registrados </p> 
<table>
<tr>
<td> autor</td>
<td> memes  del autor </td>
</tr>
@forelse($autors as $autor)
<tr>
<td><a href="{!!route('autor.show', $autor->id) !!}">{{$autor->name}} </a>  </td>
<td>{{count($autor->memes) }} </td>
</tr>
@empty
<p> No hay autores creados </p>
@endforelse
</table>

            </div>
        </div>
    </div>
</div>
@endsection
