@extends('layouts.app')
@section('title')
tags
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                </div>

<h1> Lista de tags existentes </h1>

<p> En total tenemos {{count($tags)}} tags </p>

<table>
<tr>
<td> tag </td>
<td> memes en el tag </td>
</tr>
@forelse($tags as $tag)
<tr>
<td><a href="{!!route('tag.show', $tag->id) !!}">{{$tag->title}} </a>  </td>
<td>{{count($tag->memes) }} </td>
</tr>
@empty
<p> No hay tags creados </p>
@endforelse
</table>

            </div>
        </div>
    </div>
</div>
@endsection
