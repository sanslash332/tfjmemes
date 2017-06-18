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

@forelse($autor->memes as $meme)
<article>
<div id="meme_autors">

<p> Dicho por: @foreach($meme->autors as $a)
<a href="{!! route("autor.show", $a->id)!!}"> {{$a->name}} </a>
@endforeach
</p>
</div>

<p> {{$meme->content}} </p>

<div id="meme_tags">
<p> tags: @foreach($meme->tags as $tag)
<a href="{!! route("tag.show", $tag->id) !!}">{{$tag->title}} </a>
@endforeach
</p>
</div>
</article>

<hr />

@empty
<p> no ha dicho ningún meme: </p>
@endforelse


            </div>
        </div>
    </div>
</div>
@endsection
