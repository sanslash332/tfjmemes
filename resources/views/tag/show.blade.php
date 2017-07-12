@extends('layouts.app')
@section('title')
tag: {{$tag->title}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                </div>

<h1> Memes en el tag {{$tag->title}} </h1>

@each('meme.meme', $tag->memes, 'meme', 'meme.empty')


            </div>
        </div>
    </div>
</div>
@endsection
